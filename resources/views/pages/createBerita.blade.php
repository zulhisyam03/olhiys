@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
<style type="text/css">
    .body{
        width: 100%;
        padding: 20px;
    }
</style>
    @include('layouts.navbars.auth.topnav', ['title' => 'Tambah Berita'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tambah Berita</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="card-body">
                            <form action="../../berita/" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="author" value="Admin">                                
                                <div class="form-group">
                                    <label class="label">JUDUL POSTINGAN</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Judul Postingan" required value="{{ old('title') }}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='image' class="form-label">GAMBAR POSTINGAN</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-2 d-block">
                                    <input type="file" name="image" id="image" onchange="previewImage()" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate sed voluptatibus impedit beatae itaque eum, facilis at, quod aperiam quas dolores ab minus enim id possimus nostrum dolore assumenda recusandae delectus eaque deserunt maiores, voluptates fugiat ipsum. Aspernatur explicabo nemo odit? Cupiditate, debitis exercitationem! Quibusdam maxime ad, voluptatem repellendus laborum non corporis ipsam reiciendis, voluptate aperiam, recusandae maiores? Qui perspiciatis dolorem impedit amet maxime libero, nam ex. Repudiandae placeat magnam officiis? Alias voluptatibus excepturi perspiciatis quam tempora. Iure rem necessitatibus veritatis! Dolor commodi ipsa consequatur corrupti nam cum a natus dolores modi tempore nemo accusantium odit qui dignissimos veniam eligendi, tenetur id enim et consectetur! Consequuntur soluta earum illo, minima autem quo ea animi cumque eius maxime esse eum natus saepe laborum quae! Quo dolore accusamus possimus eligendi eos, dolorem illo consequuntur voluptas, voluptatem quod culpa molestiae dolorum adipisci inventore, tenetur obcaecati debitis minus excepturi cupiditate nam. Qui sint, quod inventore at incidunt ullam. Illum, voluptate vel quas, aliquam, qui amet ex sequi distinctio quisquam perspiciatis enim nobis officia? Illo quo minus eligendi modi mollitia a culpa voluptas quis quibusdam molestiae? Nihil incidunt optio consectetur, recusandae sint quaerat veritatis numquam unde odit perferendis ut saepe, aliquam sapiente reiciendis quo praesentium reprehenderit dicta cupiditate ex laboriosam amet omnis magni beatae illo. Rem debitis perspiciatis laudantium nisi quibusdam quis officiis eos, tempore iure molestiae. Tenetur eos nisi temporibus unde, adipisci at cum iste aperiam culpa voluptatum suscipit, cupiditate ad quia expedita quae. Unde, autem delectus! Aspernatur modi adipisci incidunt dolore earum excepturi architecto doloribus, iste recusandae molestiae alias praesentium deleniti saepe distinctio ducimus. Excepturi totam exercitationem facere omnis illo enim nostrum! At amet praesentium aspernatur assumenda totam cumque ea eius explicabo quis, et culpa eaque? Quam magni maxime quaerat. 
                                Inventore eligendi, expedita saepe, accusamus placeat odit, deserunt necessitatibus officiis ratione quo nemo!
                                <div class="form-group">
                                    <label class="label">POSTINGAN</label>
                                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                    <trix-editor input="body"></trix-editor>
                                    <div class="@error('body') is-invalid @enderror"></div>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>    
                                <div class="form-group">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('../layouts.footers.auth.footer')
    </div>

     <script>
        document.addEventListener('trix-file-accept', function(e){
        e.preventDefaulth();
        });

        //Membuat Preview Image
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'blok';            

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;                  
            }
        }
        
     </script>
@endsection
