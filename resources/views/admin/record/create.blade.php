<form id="data-master" enctype="multipart/form-data">
    @csrf
    <div class="row mb-5">
        <div class="col">
            <div class="row align-items-center">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Artikel</label>
                    <select class="js-example-basic-single form-control form-control-sm" name="srticle_id">
                        <option value="">Pilih Salah Satu...</option>
                        @foreach ($article as $item)
                        <option value="{{ $item->id_articles }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Gambar</label>
                    <input class="form-control form-control-sm" name="image" id="image"
                        onchange="loadPreview(this);" accept="image/png, image/jpeg"
                        type="file" required>
                </div>
            </div>

        </div>

        <div class="col-12 col-sm-auto mb-3 mb-sm-0">
            <div class="row align-items-center">
                <div class="mb-3">
                    <img id="preview_img"
                    src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png"
                    class="img-thumbnail" width="200" height="150" />
                </div>
            </div>
        </div>
    </div>

    <div class="float-sm-start">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" id="simpan-data">SIMPAN <i
                    class="far fa-save"></i></button>
            <button type="reset" class="btn btn-danger">RESET <i class="fas fa-refresh"></i></button>
        </div>
    </div><br>
</form>
