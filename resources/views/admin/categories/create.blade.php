<form id="data-master" enctype="multipart/form-data">
    @csrf
    <div class="row mb-5">
        <div class="col">
            <div class="row align-items-center">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                        required>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="slug"
                        required>
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
