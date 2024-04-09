<div class="p-5 flex flex-col items-center">
    <img src="{{ $images[0] }}" class="w-[330px] border-2 border-gray-100 shadow-lg ml-5" id="mainImage">
    <div class="flex flex-wrap justify-center mt-3" id="all-image">
        @foreach ($images as $index => $img)
            <div onclick="changeImage('{{ $img }}', 'img-{{ $index+1 }}')" class="w-16 h-16 mr-1 mb-1 cursor-pointer">
                <img src="{{ $img }}" class="border-2 border-gray-100 shadow-md" id="img-{{ $index+1 }}">
            </div>
        @endforeach
    </div>
</div>

<script>
    window.onload = changeBorderImageColor('img-1');

    function changeImage(image, id){
        mainImage = document.getElementById("mainImage");
        mainImage.src = image;

        changeBorderImageColor(id);
        removeBorderOtherImage(id);
    }

    function changeBorderImageColor(id){
        image = document.getElementById(id);

        image.classList.remove('border-gray-100');
        image.classList.add('border-primary');
    }

    function removeBorderOtherImage(curentId){
        allImage = document.getElementById("all-image");

        for (const child of allImage.children) {
            imageId = child.children[0].id;
            image = document.getElementById(child.children[0].id);

            if(imageId != curentId){
                image.classList.add('border-gray-100');
                image.classList.remove('border-primary');
            }
        }
    }
</script>