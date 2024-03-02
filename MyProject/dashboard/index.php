<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Add Book</title>
</head>

<body>
    <?php
    include("../navbar/navbar.php");
    ?>
    <h2 class="text-info text-center text-4xl font-semi-bold text-blue-600">Welcome To Book Recommendation System</h2>
    <section class="md:grid grid-cols-3 gap-4 md:px-20">
      <section class="px-4 md:px-0 pt-8 md:pt-12">
        <div class="pt-8 pb-12 relative bg-slate-50">
          <div class="absolute px-2 py-4 bg-orange-300">
            <h1 class="text-sm font-bold tvertical text-white">SALE</h1>
          </div>
          <img
            src="./../uploaded_image/war_bodies.jpg"
            alt="jazz"
            class="object-contain h-48 w-96 m-auto"
          />
          <div class="pt-4 flex items-center justify-center">
            <button class=" text-xl font-bold">add to cart</button>
          </div>
          <div>
            <h2 class="text-orange-300 text-center font-bold text-xl pt-2">
              $1050
            </h2>
          </div>
        </div>
      </section>

      <section class="px-4 md:px-0 pt-8 md:pt-12">
        <div class="pt-8 pb-12 relative bg-slate-50">
          <div class="absolute px-2 py-4 bg-orange-300">
            <h1 class="text-sm font-bold tvertical text-white">SALE</h1>
          </div>
          <img
            src="./../uploaded_image/winter_garden.jpg"
            alt="inner"
            class="object-contain h-48 w-96 m-auto"
          />
          <div class="pt-4 flex items-center justify-center">
            <button class="text-center text-xl font-bold">add to cart</button>
          </div>
          <div>
            <h2 class="text-orange-300 text-center font-bold text-xl pt-2">
              $250
            </h2>
          </div>
        </div>
      </section>

      <section class="px-4 md:px-0 pt-8 md:pt-12">
        <div class="pt-8 pb-12 relative bg-slate-50">
          <div class="absolute px-2 py-4 bg-orange-300">
            <h1 class="text-sm font-bold tvertical text-white">SALE</h1>
          </div>
          <img
            src="./../uploaded_image/the_women.jpg"
            alt="rose"
            class="object-contain h-48 w-96 m-auto"
          />
          <div class="pt-4 flex items-center justify-center">
            <button class="text-center text-xl font-bold">add to cart</button>
          </div>
          <div>
            <h2 class="text-orange-300 text-center font-bold text-xl pt-2">
              $890
            </h2>
          </div>
        </div>
      </section>
    </section>

    <section class="md:grid grid-cols-3 gap-4 md:px-20">
      <section class="px-4 md:px-0 pt-8 md:pt-20">
        <div class="pt-8 pb-12 relative bg-slate-50">
          <div class="absolute px-2 py-4 bg-orange-300">
            <h1 class="text-sm font-bold tvertical text-white">SALE</h1>
          </div>
          <img
            src="./../uploaded_image/black_cresent.jpg"
            alt="jazz"
            class="object-contain h-48 w-96 m-auto"
          />
          <div class="pt-4 flex items-center justify-center">
            <button class="text-center text-xl font-bold">add to cart</button>
          </div>
          <div>
            <h2 class="text-orange-300 text-center font-bold text-xl pt-2">
              $1050
            </h2>
          </div>
        </div>
      </section>

      <section class="px-4 md:px-0 pt-8 md:pt-20">
        <div class="pt-8 pb-12 relative bg-slate-50">
          <div class="absolute px-2 py-4 bg-orange-300">
            <h1 class="text-sm font-bold tvertical text-white">SALE</h1>
          </div>
          <img
            src="./../uploaded_image/another_life.jpg"
            alt="inner"
            class="object-contain h-48 w-96 m-auto"
          />
          <div class="pt-4 flex items-center justify-center">
            <button class="text-center text-xl font-bold">add to cart</button>
          </div>
          <div>
            <h2 class="text-orange-300 text-center font-bold text-xl pt-2">
              $250
            </h2>
          </div>
        </div>
      </section>

      <section class="px-4 md:px-0 pt-8 md:pt-20">
        <div class="pt-8 pb-12 relative bg-slate-50">
          <div class="absolute px-2 py-4 bg-orange-300">
            <h1 class="text-sm font-bold tvertical text-white">SALE</h1>
          </div>
          <img
            src="./../uploaded_image/justice.jpg"
            alt="rose"
            class="object-contain h-48 w-96 m-auto"
          />
          <div class="pt-4 flex items-center justify-center">
            <button class="text-center text-xl font-bold">add to cart</button>
          </div>
          <div>
            <h2 class="text-orange-300 text-center font-bold text-xl pt-2">
              $890
            </h2>
          </div>
        </div>
      </section>
    </section>
</body>

</html>