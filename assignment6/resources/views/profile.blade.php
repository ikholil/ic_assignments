@extends("layouts")


@section("content")
<main class="container max-w-2xl mx-auto space-y-8 mt-8 px-2 min-h-screen">
    <!-- Cover Container -->
    <section
      class="bg-white border-2 p-8 border-gray-800 rounded-xl min-h-[400px] space-y-8 flex items-center flex-col justify-center">
      <!-- Profile Info -->
      <div
        class="flex gap-4 justify-center flex-col text-center items-center">
        <!-- Avatar -->
<!--          <div class="relative">-->
<!--            <img-->
<!--              class="w-32 h-32 rounded-full border-2 border-gray-800"-->
<!--              src="https://avatars.githubusercontent.com/u/831997"-->
<!--              alt="Ahmed Shamim" />-->
<!--            <span-->
<!--              class="bottom-2 right-4 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>-->
<!--          </div>-->
        <!-- /Avatar -->

        <!-- User Meta -->
        <div>
          <h1 class="font-bold md:text-2xl">{{$user->firstname . " " . $user->lastname}}</h1>
          <p class="text-gray-700">{{$user->bio}}</p>
        </div>
        <!-- / User Meta -->
      </div>
      <!-- /Profile Info -->

      <!-- Profile Stats -->
<!--        <div-->
<!--          class="flex flex-row gap-16 justify-center text-center items-center">-->
<!--          &lt;!&ndash; Total Posts Count &ndash;&gt;-->
<!--          <div class="flex flex-col justify-center items-center">-->
<!--            <h4 class="sm:text-xl font-bold">405</h4>-->
<!--            <p class="text-gray-600">Posts</p>-->
<!--          </div>-->

<!--          &lt;!&ndash; Total Friends Count &ndash;&gt;-->
<!--          <div class="flex flex-col justify-center items-center">-->
<!--            <h4 class="sm:text-xl font-bold">1,334</h4>-->
<!--            <p class="text-gray-600">Friends</p>-->
<!--          </div>-->

<!--          &lt;!&ndash; Total Followers Count &ndash;&gt;-->
<!--          <div class="flex flex-col justify-center items-center">-->
<!--            <h4 class="sm:text-xl font-bold">18,589</h4>-->
<!--            <p class="text-gray-600">Followers</p>-->
<!--          </div>-->
<!--        </div>-->
      <!-- /Profile Stats -->

      <!-- Edit Profile Button (Only visible to the profile owner) -->
      <a
        href="{{route('editprofile')}}"
        type="button"
        class="-m-2 flex gap-2 items-center rounded-full px-4 py-2 font-semibold bg-gray-100 hover:bg-gray-200 text-gray-700">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-5 h-5">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
        </svg>

        Edit Profile
      </a>
      <!-- /Edit Profile Button -->
    </section>
    <!-- /Cover Container -->

    <!-- Barta Create Post Card -->
<!--      <form-->
<!--        method="POST"-->
<!--        enctype="multipart/form-data"-->
<!--        class="bg-white border-2 border-black rounded-lg shadow mx-auto max-w-none px-4 py-5 sm:px-6 space-y-3">-->
<!--        &lt;!&ndash; Create Post Card Top &ndash;&gt;-->
<!--        <div>-->
<!--          <div class="flex items-start /space-x-3/">-->
<!--            &lt;!&ndash; User Avatar &ndash;&gt;-->
<!--            <div class="flex-shrink-0">-->
<!--              <img-->
<!--                class="h-10 w-10 rounded-full object-cover"-->
<!--                src="https://avatars.githubusercontent.com/u/831997"-->
<!--                alt="Ahmed Shamim" />-->
<!--            </div>-->
<!--            &lt;!&ndash; /User Avatar &ndash;&gt;-->

<!--            &lt;!&ndash; Content &ndash;&gt;-->
<!--            <div class="text-gray-700 font-normal w-full">-->
<!--              <textarea-->
<!--                class="block w-full pt-2 text-gray-900 rounded-lg border-none outline-none focus:ring-0 focus:ring-offset-0"-->
<!--                name="barta"-->
<!--                rows="2"-->
<!--                placeholder="What's going on, Shamim?"></textarea>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

<!--        &lt;!&ndash; Create Post Card Bottom &ndash;&gt;-->
<!--        <div>-->
<!--          &lt;!&ndash; Card Bottom Action Buttons &ndash;&gt;-->
<!--          <div class="flex items-center justify-between">-->
<!--            <div class="flex gap-4 text-gray-600">-->
<!--              &lt;!&ndash; Upload Picture Button &ndash;&gt;-->
<!--              <div>-->
<!--                <input-->
<!--                  type="file"-->
<!--                  name="picture"-->
<!--                  id="picture"-->
<!--                  class="hidden" />-->

<!--                <label-->
<!--                  for="picture"-->
<!--                  class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800 cursor-pointer">-->
<!--                  <span class="sr-only">Picture</span>-->
<!--                  <svg-->
<!--                    xmlns="http://www.w3.org/2000/svg"-->
<!--                    fill="none"-->
<!--                    viewBox="0 0 24 24"-->
<!--                    stroke-width="1.5"-->
<!--                    stroke="currentColor"-->
<!--                    class="w-6 h-6">-->
<!--                    <path-->
<!--                      stroke-linecap="round"-->
<!--                      stroke-linejoin="round"-->
<!--                      d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />-->
<!--                  </svg>-->
<!--                </label>-->
<!--              </div>-->
<!--              &lt;!&ndash; /Upload Picture Button &ndash;&gt;-->

<!--              &lt;!&ndash; GIF Button &ndash;&gt;-->
<!--              <button-->
<!--                type="button"-->
<!--                class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">-->
<!--                <span class="sr-only">GIF</span>-->
<!--                <svg-->
<!--                  xmlns="http://www.w3.org/2000/svg"-->
<!--                  fill="none"-->
<!--                  viewBox="0 0 24 24"-->
<!--                  stroke-width="1.5"-->
<!--                  stroke="currentColor"-->
<!--                  class="w-6 h-6">-->
<!--                  <path-->
<!--                    stroke-linecap="round"-->
<!--                    stroke-linejoin="round"-->
<!--                    d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />-->
<!--                </svg>-->
<!--              </button>-->
<!--              &lt;!&ndash; /GIF Button &ndash;&gt;-->

<!--              &lt;!&ndash; Emoji Button &ndash;&gt;-->
<!--              <button-->
<!--                type="button"-->
<!--                class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">-->
<!--                <span class="sr-only">Emoji</span>-->
<!--                <svg-->
<!--                  xmlns="http://www.w3.org/2000/svg"-->
<!--                  fill="none"-->
<!--                  viewBox="0 0 24 24"-->
<!--                  stroke-width="1.5"-->
<!--                  stroke="currentColor"-->
<!--                  class="w-6 h-6">-->
<!--                  <path-->
<!--                    stroke-linecap="round"-->
<!--                    stroke-linejoin="round"-->
<!--                    d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />-->
<!--                </svg>-->
<!--              </button>-->
<!--              &lt;!&ndash; /Emoji Button &ndash;&gt;-->
<!--            </div>-->

<!--            <div>-->
<!--              &lt;!&ndash; Post Button &ndash;&gt;-->
<!--              <button-->
<!--                type="submit"-->
<!--                class="-m-2 flex gap-2 text-xs items-center rounded-full px-4 py-2 font-semibold bg-gray-800 hover:bg-black text-white">-->
<!--                Post-->
<!--              </button>-->
<!--              &lt;!&ndash; /Post Button &ndash;&gt;-->
<!--            </div>-->
<!--          </div>-->
<!--          &lt;!&ndash; /Card Bottom Action Buttons &ndash;&gt;-->
<!--        </div>-->
<!--        &lt;!&ndash; /Create Post Card Bottom &ndash;&gt;-->
<!--      </form>-->
    <!-- /Barta Create Post Card -->

    <!-- User Specific Posts Feed -->
<!--      <article-->
<!--        class="bg-white border-2 border-black rounded-lg shadow mx-auto max-w-none px-4 py-5 sm:px-6">-->
<!--        &lt;!&ndash; Barta Card Top &ndash;&gt;-->
<!--        <header>-->
<!--          <div class="flex items-center justify-between">-->
<!--            <div class="flex items-center space-x-3">-->
<!--              &lt;!&ndash; User Avatar &ndash;&gt;-->
<!--              <div class="flex-shrink-0">-->
<!--                <img-->
<!--                  class="h-10 w-10 rounded-full object-cover"-->
<!--                  src="https://avatars.githubusercontent.com/u/831997"-->
<!--                  alt="Tony Stark" />-->
<!--              </div>-->
<!--              &lt;!&ndash; /User Avatar &ndash;&gt;-->

<!--              &lt;!&ndash; User Info &ndash;&gt;-->
<!--              <div class="text-gray-900 flex flex-col min-w-0 flex-1">-->
<!--                <a-->
<!--                  href="https://github.com/me_shaon"-->
<!--                  class="hover:underline font-semibold line-clamp-1">-->
<!--                  Ahmed Shamim Hasan Shaon-->
<!--                </a>-->

<!--                <a-->
<!--                  href="https://twitter.com/me_shaon"-->
<!--                  class="hover:underline text-sm text-gray-500 line-clamp-1">-->
<!--                  @me_shaon-->
<!--                </a>-->
<!--              </div>-->
<!--              &lt;!&ndash; /User Info &ndash;&gt;-->
<!--            </div>-->

<!--            &lt;!&ndash; Card Action Dropdown &ndash;&gt;-->
<!--            <div class="flex flex-shrink-0 self-center">-->
<!--              <div class="relative inline-block text-left">-->
<!--                <div>-->
<!--                  <button-->
<!--                    type="button"-->
<!--                    class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600"-->
<!--                    id="menu-0-button">-->
<!--                    <span class="sr-only">Open options</span>-->
<!--                    <svg-->
<!--                      class="h-5 w-5"-->
<!--                      viewBox="0 0 20 20"-->
<!--                      fill="currentColor"-->
<!--                      aria-hidden="true">-->
<!--                      <path-->
<!--                        d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z"></path>-->
<!--                    </svg>-->
<!--                  </button>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            &lt;!&ndash; /Card Action Dropdown &ndash;&gt;-->
<!--          </div>-->
<!--        </header>-->

<!--        &lt;!&ndash; Content &ndash;&gt;-->
<!--        <div class="py-4 text-gray-700 font-normal">-->
<!--          <p>-->
<!--            PHP এর $ নিয়ে এত টানাটানি না করে চাইলেই কিন্তু PHP কে fork করে-->
<!--            PoorPHP নামে নতুন ল্যাঙ্গুয়েজ বানানো যায়।-->
<!--            <br />-->
<!--            সবই থাকবে, কেবল $ থাকবে না!-->
<!--            <br />-->
<!--            <br />-->

<!--            আইডিয়াটা কেমন বন্ধুরা? 😁-->
<!--          </p>-->
<!--        </div>-->

<!--        &lt;!&ndash; Date Created & View Stat &ndash;&gt;-->
<!--        <div class="flex items-center gap-2 text-gray-500 text-xs my-2">-->
<!--          <span class="">15 hours ago</span>-->
<!--          <span class="">•</span>-->
<!--          <span>4,450 views</span>-->
<!--        </div>-->

<!--        &lt;!&ndash; Barta Card Bottom &ndash;&gt;-->
<!--        <footer class="border-t border-gray-200 pt-2">-->
<!--          &lt;!&ndash; Card Bottom Action Buttons &ndash;&gt;-->
<!--          <div class="flex items-center justify-between">-->
<!--            <div class="flex gap-8 text-gray-600">-->
<!--              &lt;!&ndash; Heart Button &ndash;&gt;-->
<!--              <button-->
<!--                type="button"-->
<!--                class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">-->
<!--                <span class="sr-only">Like</span>-->
<!--                <svg-->
<!--                  xmlns="http://www.w3.org/2000/svg"-->
<!--                  fill="currentColor"-->
<!--                  viewBox="0 0 24 24"-->
<!--                  stroke-width="2"-->
<!--                  stroke="currentColor"-->
<!--                  class="w-5 h-5">-->
<!--                  <path-->
<!--                    stroke-linecap="round"-->
<!--                    stroke-linejoin="round"-->
<!--                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>-->
<!--                </svg>-->

<!--                <p>227</p>-->
<!--              </button>-->
<!--              &lt;!&ndash; /Heart Button &ndash;&gt;-->

<!--              &lt;!&ndash; Comment Button &ndash;&gt;-->
<!--              <button-->
<!--                type="button"-->
<!--                class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">-->
<!--                <span class="sr-only">Comment</span>-->
<!--                <svg-->
<!--                  xmlns="http://www.w3.org/2000/svg"-->
<!--                  fill="none"-->
<!--                  viewBox="0 0 24 24"-->
<!--                  stroke-width="2"-->
<!--                  stroke="currentColor"-->
<!--                  class="w-5 h-5">-->
<!--                  <path-->
<!--                    stroke-linecap="round"-->
<!--                    stroke-linejoin="round"-->
<!--                    d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z"></path>-->
<!--                </svg>-->

<!--                <p>68</p>-->
<!--              </button>-->
<!--              &lt;!&ndash; /Comment Button &ndash;&gt;-->
<!--            </div>-->

<!--            <div>-->
<!--              &lt;!&ndash; Share Button &ndash;&gt;-->
<!--              <button-->
<!--                type="button"-->
<!--                class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">-->
<!--                <span class="sr-only">Share</span>-->
<!--                <svg-->
<!--                  xmlns="http://www.w3.org/2000/svg"-->
<!--                  fill="none"-->
<!--                  viewBox="0 0 24 24"-->
<!--                  stroke-width="1.5"-->
<!--                  stroke="currentColor"-->
<!--                  class="w-5 h-5">-->
<!--                  <path-->
<!--                    stroke-linecap="round"-->
<!--                    stroke-linejoin="round"-->
<!--                    d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"></path>-->
<!--                </svg>-->
<!--              </button>-->
<!--              &lt;!&ndash; /Share Button &ndash;&gt;-->
<!--            </div>-->
<!--          </div>-->
<!--          &lt;!&ndash; /Card Bottom Action Buttons &ndash;&gt;-->
<!--        </footer>-->
<!--        &lt;!&ndash; /Barta Card Bottom &ndash;&gt;-->
<!--      </article>-->

    <!-- User Specific Posts Feed -->
  </main>

  @endsection
