<x-layout>
    <section class="bg-green-700 pt-8 pb-20">
        <div class="container px-4 mx-auto">
            <img src="/images/dude.png" class="w-64 h-64 mx-auto mb-4 md:mb-8" />
            <h1 class="text-[30px] md:text-[60px] xl:text-[72px] text-white font-bold text-center uppercase">
                Is it maintained?
            </h1>

            <div class="w-62.5 h-[5px] bg-white mx-auto my-6 md:my-8"></div>

            <p class="font-lato text-white text-lg md:text-2xl text-center font-medium">Check the activity of open source projects</p>
            </div>
    </section>

    <section id="check_project" class="py-18.5 md:py-25 bg-white">
        <div class="container px-4 mx-auto">
            <h2 class="text-[45px] text-gray-700 uppercase font-bold text-center leading-[1]">Check a project</h2>
            <div class="w-62.5 h-[5px] bg-gray-700 mx-auto mt-4 mb-8"></div>

            <div class="flex justify-center">
                <div class="">
                    <p class="text-xl text-gray-700 font-lato mb-3">Paste a GitHub project URL, or the repository ("user/repository"):</p>
                    <div class="flex w-full">
                        <input class="w-full lg:w-120 xl:w-175 h-12 border border-gray-300 focus:border-[#66afe9] rounded-l-md shadow-input focus:shadow-focus-input focus:outline-none px-4 py-2 text-gray-500 placeholder-gray-500" placeholder="user/repository" />
                        <button class="bg-green-700 hover:bg-green-900 px-4 py-2 h-12 rounded-r-md text-white text-lg">
                            Go
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="metrics" class="py-18.5 md:py-25 bg-green-700">
        <div class="container px-4 mx-auto">
            <h2 class="text-[45px] text-white uppercase font-bold text-center">Metrics</h2>

            <div class="w-62.5 h-[5px] bg-white mx-auto mt-4 mb-8"></div>

            <div class="flex flex-col items-center">
                <div class="w-full lg:w-2/3">
                    <div class="grid xl:grid-cols-2 gap-4 lg:gap-8 mb-6">
                        <div class="flex flex-col items-center">
                            <div class="text-2xl font-bold text-white uppercase text-center">Resolution time</div>
                            <div class="font-lato text-xl text-white font-medium text-center">Median time needed to close an issue.</div>
                        </div>
                        <div class="flex flex-col items-center font-medium">
                            <div class="text-2xl font-bold text-white uppercase text-center">Open percentage</div>
                            <div class="font-lato text-xl text-white text-center">Percentage of open issues.</div>
                        </div>
                    </div>

                    <p class="text-base text-center text-white font-medium">Some issues are ignored based on their labels (example of ignored labels: "enhancement", "feature"…). For the median time needed to close an issue, issues older than 6 months are ignored too.</p>
                </div>

                <hr class="w-full lg:w-2/3 h-[1px] bg-white my-8" />

                <h3 class="text-2xl uppercase text-white text-center font-bold my-8">Projects recently analyzed</h3>

                <div class="grid md:grid-cols-3 gap-12 xl:gap-16 w-full">
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                </div>

                <hr class="w-full lg:w-2/3 h-[1px] bg-white my-8" />

                <h3 class="text-2xl uppercase text-white text-center font-bold my-8">Popular projects</h3>

                <div class="grid md:grid-cols-3 gap-16 w-full my-8">
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                    <div class="flex flex-col gap-4 items-center mb-4">
                        <a class="text-white font-lato text-lg hover:underline text-center">nhibernate/fluent-nhibernate</a>
                        <img src="/images/badge.svg" />
                        <img src="/images/open_issue.svg" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="py-18.5 md:py-25 bg-white">
        <div class="container px-4 mx-auto">
            <h2 class="text-[45px] text-gray-700 uppercase font-bold text-center">About</h2>

            <div class="w-62.5 h-[5px] bg-gray-700 mx-auto mt-4 mb-8"></div>

            <div class="w-full lg:w-2/3 mx-auto grid md:grid-cols-2 gap-4">
                <div>
                    <p class="text-xl text-gray-700 font-medium leading-[1.4] font-lato">
                        <i>Is it maintained?</i> is an open source project whose goal is to monitor open source projects.
                    </p>
                </div>
                <div>
                    <p class="text-xl text-gray-700 font-medium leading-[1.4] font-lato">
                        Have you ever wondered whether or not to use a library or a framework, uncertain of how well it is maintained?
                    </p>
                </div>
            </div>

            <hr class="w-full lg:w-2/3 h-[1px] bg-white my-8 mx-auto" />

            <div class="flex justify-center">
                <a href="https://github.com/mnapoli/Maintained" class="bg-gray-400 hover:bg-[#798d8f] py-2.5 px-4 rounded-md text-lg leading-[1.4] flex items-center gap-1 text-white">
                    <i class="fa fa-github" ></i>
                    Fork on GitHub
                </a>
            </div>
        </div>
    </section>
</x-layout>
