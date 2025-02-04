<?php
include 'database/config.php';
include 'components/header.php';
?>

<div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-600 font-[sans-serif] p-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center max-w-xl mx-auto">
          <h2 class="text-3xl font-extrabold text-gray-900 inline-block">LATEST BLOGS</h2>
          <p class="text-gray-800 text-sm mt-6 m-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
        </div>

        <div class="flex rounded-md border-2 border-blue-500 overflow-hidden max-w-md mx-auto font-[sans-serif]">
        <input type="email" placeholder="Search Something..."
          class="w-full outline-none bg-white text-gray-600 text-sm px-4 py-3" />
        <button type='button' class="flex items-center justify-center bg-[#007bff] px-5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="fill-white">
            <path
              d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
            </path>
          </svg>
        </button>
      </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 max-lg:max-w-3xl max-md:max-w-md mx-auto">
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
            <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
              <span class="text-sm block mb-2 text-yellow-400 font-semibold">10 FEB 2023 | BY JOHN DOE</span>
              <h3 class="text-xl font-bold text-white">A Guide to Igniting Your Imagination</h3>
              <div class="mt-4">
                <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
            <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 2" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
              <span class="text-sm block mb-2 text-yellow-400 font-semibold">7 JUN 2023 | BY MARK ADAIR</span>
              <h3 class="text-xl font-bold text-white">Hacks to Supercharge Your Day</h3>
              <div class="mt-4">
                <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
            <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
              <span class="text-sm block mb-2 text-yellow-400 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
              <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
              <div class="mt-4">
                <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
            <img src="https://readymadeui.com/images/food.webp" alt="Blog Post 3" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
              <span class="text-sm block mb-2 text-yellow-400 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
              <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
              <div class="mt-4">
                <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
            <img src="https://readymadeui.com/images/food11.webp" alt="Blog Post 3" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
              <span class="text-sm block mb-2 text-yellow-400 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
              <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
              <div class="mt-4">
                <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>
          <div class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
            <img src="https://readymadeui.com/images/food22.webp" alt="Blog Post 3" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
              <span class="text-sm block mb-2 text-yellow-400 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
              <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
              <div class="mt-4">
                <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
include 'components/footer.php';
?>