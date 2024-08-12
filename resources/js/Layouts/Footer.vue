<script>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

export default {
    name: 'Footer',

    components: {
        ResponsiveNavLink,
    },
}
</script>

<template>

    <footer class="bg-black py-8 px-4 flex flex-col sm:flex-row sm:justify-between md:px-14 gap-4 items-center">

        <nav class="flex">

            <ul class="flex justify-between gap-4 mb-10 sm:mb-0 w-full">
                <li class="text-white text-sm xl:text-xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/cgv">CGV</ResponsiveNavLink>
                </li>
                <li class="text-white text-sm xl:text-xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/cgu">CGU</ResponsiveNavLink>
                </li>
                <li class="text-white text-sm xl:text-xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/rgpd">Politique de confidentialité</ResponsiveNavLink>
                </li>
                <li class="text-white text-sm xl:text-xl hover:underline underline-offset-8 decoration-2 cursor-pointer">
                    <ResponsiveNavLink href="/legals">Mentions légales</ResponsiveNavLink>
                </li>
            </ul>

        </nav>

        <div class="flex justify-between w-1/2  md:w-1/4">
            <ResponsiveNavLink href="/">
                <img src="../../../public/assets/facebook-logo.svg" alt="logo facebook" class="cursor-pointer">
            </ResponsiveNavLink>
            <ResponsiveNavLink href="/">
                <img src="../../../public/assets/youtube-logo.svg" alt="logo youtube" class="cursor-pointer">
            </ResponsiveNavLink>
            <ResponsiveNavLink href="/">
                <img src="../../../public/assets/x-logo.svg" alt="logo x twitter" class="cursor-pointer">
            </ResponsiveNavLink>
            <ResponsiveNavLink href="/">
                <img src="../../../public/assets/instagram-logo.svg" alt="logo instagram" class="cursor-pointer">
            </ResponsiveNavLink>
        </div>

        <p class="text-white text-sm xl:text-xl">Copyrights 2024 MarcAu</p>

    </footer>

</template>
