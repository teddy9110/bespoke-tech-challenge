<template>
    <div class="relative w-full">
        <p class="absolute inset-x-0 bottom-0 bg-black text-white p-4">{{ item.name }}</p>
        <div class="bg-black p-4 absolute left-0 top-0">
            <component :is="item.type_icon"  class="h-5 w-5 text-white"/>
        </div>
        <img :src="item.image_url" :alt="item.name" />
    </div>
</template>

<script>
import { BookOpenIcon, DownloadIcon, ExternalLinkIcon } from '@heroicons/vue/outline'
export default {
    props: {
        item: {
            type: Object
        },
    },
    components: {
        "book-open": BookOpenIcon,
        "download": DownloadIcon,
        "external-link": ExternalLinkIcon,
    },

    setup() {
    }
}

</script>

