@extends('layouts.main')
@section('container')
<style>
    .no-spinners {
        -moz-appearance: textfield;
    }

    .no-spinners::-webkit-outer-spin-button,
    .no-spinners::-webkit-inner-spin-button {
        margin: 0;
        -webkit-appearance: none;
    }
</style>

<section>
    <div class="relative max-w-screen-xl px-4 py-8 mx-auto">
        <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-1 mt-8">
                <div class="aspect-w-1 aspect-h-1">
                    <img alt="Mobile Phone Stand" class="object-cover rounded-xl" src="assets/images/makanan/1.jpg" />
                </div>
                <section>
                    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 lg:px-8">
                        <h2 class="text-xl font-bold sm:text-2xl">Customer Reviews</h2>
                        <div class="grid grid-cols-1 mt-8 lg:grid-cols-2 gap-x-16 gap-y-12">
                            <blockquote>
                                <header class="sm:items-center sm:flex">
                                    <div class="flex -ml-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-200"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>

                                    <p class="mt-2 font-medium sm:ml-4 sm:mt-0">The best thing money can buy!</p>
                                </header>

                                <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Ullam possimus fuga dolor rerum dicta, ipsum laboriosam est totam iusto alias
                                    incidunt cum tempore aliquid aliquam error quisquam ipsam asperiores! Iste?</p>

                                <footer class="mt-4">
                                    <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </section>
            </div>

            <div class="sticky top-0">
                <div class="flex justify-between mt-8">
                    <div class="max-w-[35ch]">
                        <h1 class="text-4xl font-bold">
                            Ketoprak
                        </h1>
                    </div>
                </div>

                <div class="flex justify-between mt-8">
                    <div class="max-w-[35ch]">
                        <h1 class="text-xl font-bold">
                            Asal Daerah
                        </h1>
                    </div>
                </div>
                <details class="relative mt-2 group">
                    <summary class="block">
                        <div>
                            <div class="prose max-w-none group-open:hidden">
                                <p>
                                    DKI Jakarta
                                </p>
                            </div>
                        </div>
                    </summary>

                </details>
                <div class="flex justify-between mt-8">
                    <div class="max-w-[35ch]">
                        <h1 class="text-xl font-bold">
                            Deskripsi
                        </h1>
                    </div>
                </div>
                <details class="relative mt-2 group">
                    <summary class="block">
                        <div>
                            <div class="prose max-w-none group-open:hidden">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veniam
                                    dicta beatae
                                    eos ex error culpa delectus rem tenetur, architecto quam nesciunt, dolor
                                    veritatis
                                    nisi minus inventore, rerum at recusandae?
                                </p>
                            </div>

                            <span
                                class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                                Read More
                            </span>
                        </div>
                    </summary>

                    <div class="pb-6 prose max-w-none">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veniam dicta
                            beatae eos ex
                            error culpa delectus rem tenetur, architecto quam nesciunt, dolor veritatis nisi
                            minus
                            inventore, rerum at recusandae?
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nam sapiente
                            nobis ea
                            veritatis error consequatur nisi exercitationem iure laudantium culpa, animi
                            temporibus non!
                            Maxime et quisquam amet. A, deserunt!
                        </p>
                    </div>
                </details>
                <div class="flex justify-between mt-8">
                    <div class="max-w-[35ch]">
                        <h1 class="text-xl font-bold">
                            Cara Membuat
                        </h1>
                    </div>
                </div>
                <details class="relative mt-2 group">
                    <summary class="block">
                        <div>
                            <div class="prose max-w-none group-open:hidden">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veniam
                                    dicta beatae
                                    eos ex error culpa delectus rem tenetur, architecto quam nesciunt, dolor
                                    veritatis
                                    nisi minus inventore, rerum at recusandae?
                                </p>
                            </div>

                            <span
                                class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0">
                                Read More
                            </span>
                        </div>
                    </summary>

                    <div class="pb-6 prose max-w-none">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veniam dicta
                            beatae eos ex
                            error culpa delectus rem tenetur, architecto quam nesciunt, dolor veritatis nisi
                            minus
                            inventore, rerum at recusandae?
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nam sapiente
                            nobis ea
                            veritatis error consequatur nisi exercitationem iure laudantium culpa, animi
                            temporibus non!
                            Maxime et quisquam amet. A, deserunt!
                        </p>
                    </div>
                </details>
            </div>
        </div>
</section>

@endsection