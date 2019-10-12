<template>
    <div>
        <button :type="type" class="btn btn-primary" v-text="test.name"></button>
    </div>
</template>

<script>
    export default{
        mounted(){
            console.log('meh');

            axios.post('api/vue', {})
                .then(response => {
                    this.test = response.data;
                });
        },

        data: function () {
            return {
                test: null
            }
        },

        props: [
            'text',
            'type'
        ]
    }
</script>
