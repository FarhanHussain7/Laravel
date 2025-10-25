<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->

    <!-- Files and Images are saved in  Storage/app/public if you want to use them on web pages then they come from public/storage/upload -->
     <form action="/upload" method="post" enctype="multipart/form-data">
@csrf
    <input type="file" name="file" placeholder="Choose a file" id="">
        <br/>
        <br/>
        <button>Upload</button>
    </form>

    <img class="Img">
</div>
