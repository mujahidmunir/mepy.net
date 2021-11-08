<!-- Modal -->
<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="data-edit" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-5">
                        <div class="col">

                            <div class="row align-items-center">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                    <select class="form-control form-control-sm" name="category_id" id="category_id_edit">
                                        <option value="">Pilih Salah Satu...</option>
                                        @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="title_edit" name="title"
                                        required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                    <textarea id="description_edit" class="form-control" name="description" rows="10" cols="50"></textarea>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Gambar</label>
                                    <input class="form-control form-control-sm" name="image" id="image_edit"
                                        onchange="loadPreviewEdit(this);" accept="image/png, image/jpeg"
                                        type="file" required>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-auto mb-3 mb-sm-0">
                            <div class="row align-items-center">
                                <div class="mb-3">
                                    <img id="preview_img_edit"
                                    src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png"
                                    class="img-thumbnail" width="200" height="150" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="" id="id_edit" name="id_edit">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="simpan-edit" onclick="editData();">SIMPAN <i
                        class="far fa-save"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
