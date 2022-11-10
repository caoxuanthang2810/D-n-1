<div class="container mx-auto">
    <div class="flex justify-center mt-[28px]">
        <form action="" class="w-[600px] flex justify-center mb-[190px]" method="POST">
            <div>
                <div class="flex justify-center">
                    <div class="text-center">
                        <span class="text-[32px] font-bold">Create Account</span>
                    </div>
                </div>

                <div class="mt-[48px]">
                    <div class="my-3 font-bold">Email</div>
                    <input type="text" id="email" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow@gmail.com">
                </div>

                <div class="">
                    <div class="my-3 font-bold">User Name</div>
                    <input type="text" id="userName" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow">
                </div>

                <div class="">
                    <div class="my-3 font-bold">Password</div>
                    <input type="text" id="password" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="*********">
                </div>

                <div class="">
                    <div class="my-3 font-bold">Re-Password</div>
                    <input type="text" id="passwordcheck" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="*********">
                </div>

                <div class="w-[400px] mt-[30px] font-bold p-4 flex bg-[#EFA969] justify-center items-center">
                    <button onclick="return checkFormRegister()">Create Now</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../Asset/Javascript/main.js"></script>
</div>