<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
     <h1>Images Upload </h1>
</div>
<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->

    <!-- Files and Images are saved in  Storage/app/public if you want to use them on web pages then they come from public/storage/upload -->
     <form action="/uploadform" method="post" enctype="multipart/form-data">
@csrf
    <input type="file" name="file" placeholder="Choose a file" id="">
        <br/>
        <br/>
        <button>Upload</button>
    </form>
</div>
    <hr>
    <h1>List of All Images</h1>
<div class="image-grid">
    @if(isset($imgData) && count($imgData))
        @foreach($imgData as $img)
            <div class="image-card">
                <img src="{{ url('storage/Images/' . $img->path) }}" alt="Uploaded Image">
            </div>
        @endforeach
    @else
        <p>No images found.</p>
    @endif
</div>

<style>
    .image-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
    padding: 40px;
    background-color: #f9f9f9;
}

.image-card {
    width: 300px;
    height: 220px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
}

.image-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: none;
}
</style>
