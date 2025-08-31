<?php
$sub_menu = "910700";
define('G5_IS_ADMIN', true);
include_once ('../../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');
include_once(G5_ADMIN_PATH.'/admin.head.php');
?>


<style>
    .dz-image img {
        display: block;
        width: 100%;  /* 또는 적절한 너비 */
        height: auto;
    }

    .dz-progress {
        display: none !important;
    }

    input[type="radio"][name="thumbnailSelector"] {
        display: none;
    }

    /* 썸네일에 선택된 테두리 스타일 */
    .dz-thumbnail-selected {
        border: 3px solid #007bff; /* 파란색 테두리 */
        box-sizing: border-box;
        border-radius: 4px;
    }

    .dz-preview {
        cursor: pointer;
    }
</style>
<h2>파일을 여기에 드래그 하거나 클릭하세요</h2>



<!-- Dropzone Form -->
<form class="dropzone" id="my-dropzone"></form>
<button type="button" id="modal-submit" class="btn btn-primary" onclick='createEvent11()'>등록</button>


<!-- Dropzone JS -->
<link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet" />
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>


<!-- (선택) Dropzone 설정 커스터마이징 -->
<script type="text/javascript">
    var myDropzone1;
    Dropzone.autoDiscover = false;
    var myDropzone1 = new Dropzone("#my-dropzone", {
        url: "./dummy-upload.php", // ✅ 실제 업로드 안 해도 placeholder라도 필요
        autoProcessQueue: false,
        clickable: true,
        maxFilesize: 100,
        maxFiles: 99,
        parallelUploads: 5,
        dictDefaultMessage: "여기에 파일을 드래그하거나 클릭하여 업로드하세요",
        addRemoveLinks: true, // ✅ 삭제 버튼 활성화
        dictRemoveFile: "삭제", // 버튼 텍스트 (선택사항)
        acceptedFiles: 'image/*',
        init: function () {
            const dropzoneInstance = this;

            this.on("addedfile", function (file) {
                // 라디오 버튼 생성 (숨겨짐)
                const radio = document.createElement("input");
                radio.type = "radio";
                radio.name = "thumbnailSelector";
                radio.style.display = "none"; // 숨김 처리
                file.isThumbnail = false;

                // 썸네일 클릭 시 선택
                file.previewElement.addEventListener("click", function () {
                    // 모든 썸네일 초기화
                    myDropzone1.files.forEach(f => {
                        f.isThumbnail = false;
                        if (f.previewElement) {
                            f.previewElement.classList.remove("dz-thumbnail-selected");
                        }
                    });

                    // 현재 클릭된 썸네일만 선택
                    file.isThumbnail = true;
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-thumbnail-selected");
                    }
                    radio.checked = true;
                });

                file.previewElement.appendChild(radio);

                if (file.name.startsWith("thumb.")) {
                    file.isThumbnail = true;
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-thumbnail-selected");
                    }
                }
            });


            // Drag & Drop 순서 변경
            new Sortable(dropzoneInstance.previewsContainer, {
                animation: 150,
                onEnd: function () {
                    // 순서 변경 후 작업이 필요하면 여기에 작성
                    console.log("드래그 정렬 완료");
                }
            });
            // 서버에서 파일 목록 불러오기
            fetch("./dropzone_test_read.php")
            .then(res => res.json())
            .then(files => {
                 // 파일 이름 기준 정렬 (예: 1.jpg, 2.jpg, ...)
                files.sort((a, b) => {
                    const numA = parseInt(a.name);
                    const numB = parseInt(b.name);
                    return numA - numB;
                });

                // 비동기 fetch → 순차 처리
                const loadSequentially = async () => {
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        const res = await fetch(file.url);
                        const blob = await res.blob();
                        const fileBlob = new File([blob], file.name, { type: blob.type });

                        myDropzone1.emit("addedfile", fileBlob);
                        myDropzone1.emit("thumbnail", fileBlob, file.url);
                        myDropzone1.emit("complete", fileBlob);
                        myDropzone1.files.push(fileBlob);

                        // 썸네일 순서 CSS 보장
                        const last = myDropzone1.files[myDropzone1.files.length - 1];
                        if (last.previewElement) {
                            last.previewElement.style.order = i;
                        }
                    }
                };

                loadSequentially();
            });
        }
    });

    function getSortedFilesByDOMOrder(dropzoneInstance) {
        const previewElements = [...dropzoneInstance.previewsContainer.children];
        return previewElements.map(preview => {
            return dropzoneInstance.files.find(f => f.previewElement === preview);
        }).filter(f => !!f);
    }

  function createEvent11(){
        myDropzone1.processQueue();
        var formData = new FormData();
        if (confirm("이벤트 정보를 생성 하시겠습니까?")) {
            const sortedFiles = getSortedFilesByDOMOrder(myDropzone1);
            const formData = new FormData();

            let normalIndex = 1;

            sortedFiles.forEach((file) => {
                const ext = file.name.split('.').pop();

                if (file.isThumbnail) {
                    // 썸네일 파일
                    const thumbName = `thumb.${ext}`;
                    const thumbFile = new File([file], thumbName, { type: file.type });
                    formData.append('thumbnail', thumbFile); // ✅ 별도의 키로 전송
                } else {
                    // 일반 이미지 파일 (1.jpg, 2.png ...)
                    const newName = `${normalIndex++}.${ext}`;
                    const renamedFile = new File([file], newName, { type: file.type });
                    formData.append('photo1[]', renamedFile);
                }
            });

            formData.append("stringData", "정렬된 이미지 업로드");

            $.ajax({
                type: 'POST',
                url: './dropzone_test_create.php',
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    console.log(response);
                    // location.reload();
                },
                error: function (error) {
                    console.error('Error adding data:', error);
                }
            });
        }
    }
</script>

<?php
include_once(G5_ADMIN_PATH.'/admin.tail.php');
?>