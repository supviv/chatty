<template >
	
	<div class="chat-composer">
        <input type="text" name="text" placeholder="Start typing your message. " v-model= "messageText" @keydown.enter="sendMessage">
		<button type="submit" class="btn btn-primary" @click="sendMessage">Send</button>
	</div>


</template>

<script>
    export default {
        data(){ //startup data method
            return { //retrun object
                messageText: ''
            }
            },
            methods: {
                sendMessage(){
                    this.$emit('messagesent', {
                        message: this.messageText,
                        user: "John Doe"
                    });
                    this.messageText = ''; // after sending message clears out text. 
                }
            }
        }
    
</script>

<style>
    .chat-composer{
        display: flex;
    }

    .chat-composer input{
        flex: 1 auto;
    }

    .chat-composer button {
        border-radius: 0;
    }

</style>