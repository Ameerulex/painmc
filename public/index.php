<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PainMC</title>
    <!-- LINK -->
    <link rel="stylesheet" href="../src/main.css">
    <!-- JAVASCRIPT -->
    <script src="https://kit.fontawesome.com/fe4e2fa456.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript.js"></script>
</head>
<body>
    <nav class="bg-purple-900 ">
        <div class="container px-8 mx-auto">
            <div class="py-4 flex justify-between">
                <div class="text-4xl font-Yanone">
                        <a href="#" class="flex items-center">
                            <img class="h-12" src="../public/assets/img/logo.png">
                        </a>
                </div>
                <div class="hidden md:flex space-x-40">
                    <div class="flex items-center text-md text-gray-100 font-Nunito font-semibold space-x-14 self-center">
                        <a class="hover:text-purple-300 transition duration-700" href="#">
                            HOME
                        </a>
                        <a class="hover:text-purple-300 transition duration-700" href="#">
                            SHOP
                        </a>
                        <a class="hover:text-purple-300 transition duration-700" href="#">
                            CONTACT
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-12">
                    <a href="#">
                        <button class="p-2 bg-yellow-300 rounded-3xl text-purple-900 font-nunito text-sm font-semibold hover:bg-opacity-75  hover:text-gray-50 transition duration-700">
                            REGISTER
                        </button>
                    </a>
                    <a href="#">
                        <span class="text-gray-100 text-2xl hover:text-purple-300 transition duration-700"><i class="fas fa-user"></i></span>
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile-menu hidden font-Nunito font-semibold">
            <a href="#" class="block py-2 px-4 text-md hover:bg-purple-700">
                HOME
            </a>
            <a href="#" class="block py-2 px-4 text-md hover:bg-purple-700">
                SHOP
            </a>
            <a href="#" class="block py-2 px-4 text-md hover:bg-purple-700">
                CONTACT
            </a>
        </div>
    </nav>
</body>
</html>