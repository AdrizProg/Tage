<x-app-layout>
    <div class="max-w-md mx-auto mt-10">

        @foreach ($registroAntes as $antes)
        <div class="mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md w-full text-left" onclick="toggleDropdown('dropdown1')">
                Antes <i id="icon-dropdown1" class="fas fa-chevron-down float-right"></i>
            </button>

            <div id="dropdown1" class="hidden mt-2 p-4 border rounded-md transition-height overflow-hidden">
                <div class="text-center report">
                    <div class="bg-white p-8 rounded-lg shadow-lg w-full" style="box-shadow: 0 4px 20px rgba(139, 69, 19, 0.5);">
                        @include('registros.antes')
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($registroDurante as $durante)
        <div class="mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md w-full text-left" onclick="toggleDropdown('dropdown2')">
                Durante <i id="icon-dropdown2" class="fas fa-chevron-down float-right"></i>
            </button>

            <div id="dropdown2" class="hidden mt-2 p-4 border rounded-md transition-height overflow-hidden">
                <div class="text-center report">
                    <div class="bg-white p-8 rounded-lg shadow-lg w-full" style="box-shadow: 0 4px 20px rgba(139, 69, 19, 0.5);">
                        @include('registros.durante')
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($registroDespues as $despues)
        <div class="mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md w-full text-left" onclick="toggleDropdown('dropdown3')">
                Después <i id="icon-dropdown3" class="fas fa-chevron-down float-right"></i>
            </button>

            <div id="dropdown3" class="hidden mt-2 p-4 border rounded-md transition-height overflow-hidden">
                <div class="report">
                    <div class="text-center report">
                        <div class="bg-white p-8 rounded-lg shadow-lg w-full" style="box-shadow: 0 4px 20px rgba(139, 69, 19, 0.5);">
                            @include('registros.despues')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <style>
        .transition-height {
            transition: height 0.3s ease;
        }
    </style>

    <script>
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            const icon = document.getElementById(`icon-${id}`);
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.style.height = dropdown.scrollHeight + 'px';
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            } else {
                dropdown.style.height = '0px';
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 300);
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            }
        }
    </script>
</x-app-layout>