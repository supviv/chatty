<template>
	
	<div class="chat-name">
        <form>
        <input type="text" name="user-name" placeholder="Your name " v-model= "chatName" >
        </form>
	</div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
    
</script>

<style>
    .chat-name{
        display: flex;
    }

    .chat-name input{
        flex: 1 auto;
    }

    .chat-name button {
        border-radius: 0;
    }

</style>