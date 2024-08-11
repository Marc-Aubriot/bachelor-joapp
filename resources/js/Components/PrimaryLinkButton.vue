<script>
export default {
    name: 'PrimaryLinkButton',

    props: {
        href: String,
        target: String,
    },
}
</script>

<template>
    <a 
        class="bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300"
        :href="href"
        :target="target"
    ><slot /></a>
</template>
