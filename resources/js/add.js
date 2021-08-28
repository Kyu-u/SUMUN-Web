

window.addEventListener('DOMContentLoaded', () => { 
    const card = document.querySelector('.card')
    const add = document.querySelector('.add')

add.addEventListener('click', () => {

    const html = `<div  class="del py-6 px-4">

    <div class="w-52 ip:w-64 md:w-96 bg-gradient-to-r from-signup-0 to-border-0 rounded-3xl ">

        <div class="py-4 px-8 md:px-16 md:py-8">
            <div class="flex flex-col text-white">
                <label class="pb-2 text-sm md:text-md" for="Username" class="">Username</label>
                <input class="text-black rounded-md py-1 px-2 md:px-4 md:py-2" type="text"
                    id="Username" name="Username" placeholder="Username">
                <label class="pt-4 pb-2 text-white text-sm md:text-md" for="Email"
                    class="">Council</label>
                <select class="text-black rounded-md py-1 px-2 md:px-4 md:py-2" id="Council"
                    name="Council">
                    <option value="UNDP">UNDP</option>
                    <option value="UNEP">UNEP</option>
                    <option value="UNSC">UNSC</option>
                </select>

                <div class="flex flex-row justify-end">
                    <!-- START : BUTTON DELETE-->
                    <button type="button" class="delete flex justify-end items-center pt-4">
                        <span class="pr-1 text-sm md:text-md">Delete</span> <svg width="11"
                            height="10" viewBox="0 0 11 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">

                            <path d="M10 5L1 5" stroke="#51B77A" stroke-width="2"
                                stroke-linecap="square" stroke-linejoin="round" />
                        </svg>

                    </button>
                    <!-- END : BUTTON DELETE-->
                </div>
            </div>
        </div>

    </div>


</div>`;
    const addCard = document.querySelector(`.card`);
    addCard.innerHTML += html;

});




    


})
