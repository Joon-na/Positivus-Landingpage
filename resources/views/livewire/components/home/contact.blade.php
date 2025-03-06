<section>
    <div class="flex flex-col lg:items-center lg:flex-row text-center lg:text-left mb-[80px]">
        <h1
            class="inline-block lg:mr-[40px] mb-2 px-3 py-1 mx-auto sm:mx-0 rounded-[7px] bg-[#B9FF66] text-2xl sm:text-3xl lg:text-[40px] font-bold">
            Contact Us
        </h1>
        <p class="text-lg sm:text-xl mx-auto sm:mx-0 max-w-[90%] sm:max-w-[580px]">
            Connect with Us: Let's Discuss Your Digital Marketing Needs
        </p>
    </div>

    <div
        class="flex flex-col lg:flex-row items-center justify-between bg-[#F3F3F3] rounded-[45px] relative overflow-hidden lg:h-[773px] px-4 sm:px-6 py-10 mb-[140px]">
        <div class="w-full max-w-[600px] mx-auto">
            <div class="flex items-center justify-center lg:justify-start space-x-6 mb-6">
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="contact_type" class="hidden peer" checked>
                    <div
                        class="w-5 h-5 border border-black rounded-full flex items-center justify-center peer-checked:border-black">
                        <div class="w-3 h-3 bg-lime-400 rounded-full peer-checked:block"></div>
                    </div>
                    <span class="text-black">Say Hi</span>
                </label>

                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="contact_type" class="hidden peer">
                    <div
                        class="w-5 h-5 border border-black rounded-full flex items-center justify-center peer-checked:border-black">
                        <div class="w-3 h-3 bg-lime-400 rounded-full hidden peer-checked:block"></div>
                    </div>
                    <span class="text-black">Get a Quote</span>
                </label>
            </div>

            <form class="space-y-4">
                <div>
                    <label class="block text-black text-sm mb-2">Name</label>
                    <input type="text"
                        class="w-full px-4 py-3 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Name">
                </div>
                <div>
                    <label class="block text-black text-sm mb-2">Email*</label>
                    <input type="email"
                        class="w-full px-4 py-3 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Email">
                </div>
                <div>
                    <label class="block text-black text-sm mb-2">Message*</label>
                    <textarea class="w-full px-4 py-3 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        rows="4" placeholder="Message"></textarea>
                </div>
                <button class="w-full bg-black text-white py-3 rounded-lg transition">Send Message</button>
            </form>
        </div>

        <!-- Gambar hanya muncul di desktop -->
        <div class="hidden relative lg:block lg:right-72 lg:w-[700px]">
            <img src="/images/home/contact.png" alt="Contact Illustration"
                class="w-full top-[-320px] right-[-640px] absolute object-cover">
        </div>
    </div>
</section>
