@extends('layouts.default')

@section('page-content')
<section class="py-20 min-h-screen flex items-center">
    <div class ="max-w-screen-lg mx-auto">
        <h2 class="text-6xl text-center mb-6">About</h2>
        <h3 class="text-4xl text-center text-grey-200 mb-6">Who is Nikolay Dimitrov</h3>
        <p class="mb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ut ex omnis voluptas vero dicta cum repudiandae distinctio! Est, aliquam adipisci neque fuga reprehenderit consequuntur corporis suscipit rem molestiae, placeat pariatur culpa consequatur inventore commodi, iure magni voluptate tempora voluptatum voluptatibus praesentium ad nulla corrupti. Non ex optio saepe facere accusamus placeat dolores sit ea, magni alias pariatur voluptates totam, ducimus exercitationem at nesciunt vel distinctio labore sequi laborum soluta sed. Sed officiis ipsa cum. Sapiente iste quod tenetur officia sequi ipsam placeat aliquid. Nostrum deleniti rerum est ipsam. Ullam iste, nulla maiores cupiditate ipsa libero. Soluta asperiores culpa consequuntur.
        </p>
        <p class="mb-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam non facilis laboriosam accusantium natus iusto, aliquid similique cupiditate animi temporibus! Blanditiis distinctio dolores illum cumque maxime consequatur nostrum accusamus inventore vero. Reprehenderit, obcaecati nemo. Repudiandae reprehenderit voluptates perferendis, rem quo nemo sunt officiis? Expedita quasi ipsam possimus, blanditiis unde delectus!
        </p>
        <div class="mb-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus amet harum ratione ex? Expedita, ab in? Odio quis qui eum, soluta minus provident vero perspiciatis numquam unde? Nemo, sequi. Consequatur ducimus illum rerum fugiat. Quae ab incidunt odio, adipisci perspiciatis quaerat amet tempora eveniet nam quibusdam aperiam et corporis nobis.
        </div>
        <div class ="text-center">
            <a href="{{ route('home') }}" class="inline-block bg-red-500 text-center py-2 px-4 rounded 
            hover:bg-green-500 transition">Go Home</a>
        </div>
    </div>
</section>
@endsection