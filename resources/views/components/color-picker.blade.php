<script>
    Alpine.data("colorPicker", (colors) => ({
        colors,

        selected: [],

        timer: null,

        toggle(color) {
            color.selected = !color.selected;
            this.selected = this.colors
                .filter(c => c.selected)
                .map(c => c.symbol);

            clearTimeout(this.timer);

            this.timer = setTimeout(() => {
                this.$dispatch('input', this.selected);
            }, 600);
        }
    }));
</script>


<ul {{ $attributes }} x-data="colorPicker(@js($colors))" class="manu bg-base-200 rounded-box m-4 p-4">
    <template x-for="color in colors">
        <li>
            <a @click="toggle(color)"
                :class="{ 'flex': true, 'gap-4': true, 'py-4': true, 'items-center': true, 'opacity-50': !color.selected }">
                <img x-bind:src="color.image" class="h-8">
                <span x-text="color.label"></span>
            </a>
        </li>
    </template>
</ul>
