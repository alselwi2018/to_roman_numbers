<template>
    <div>
        <form
  id="app"
  @submit.prevent="checkNum"
>
<div class="alert alert-danger" role="alert" v-if="error">{{error}}</div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Enter Number</span>
        <input type="text"  v-model="form.numeral" required class="form-control" placeholder="Enter number to convert to roman" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="text-center">
    <input
      type="submit" class="bg-primary text-white p-2"
      value="Number to Roman"
    >
    </div>
</form>
<br>
<romanNumber />
</div>
</template>
<script>
import axios from 'axios'
import romanNumber from './FetchRoman'
export default {
    components:{
        romanNumber
    },
    setup() {

    },
    name: 'Roman',
    data(){
        return {
            form:{
            numeral:'',
            roman_number:''
            },
            error:''
        }
    },
    methods:{
        checkNum(){
            const datas ={'numeral': this.form.numeral};
            axios.post('api/int_to_roman',datas
            ).then(res => {
                console.log(res.data)
                this.clear()
                document.location.href = "/"
            }).
            catch(err => {
                this.error = err.response.data.message
            })
        },
        clear()
        {
            this.form.numeral = ''
        }
    }
}
</script>
