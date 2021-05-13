<template>
    <div>
       <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Number</th>
      <th scope="col">Roman</th>
    </tr>
  </thead>
  <tbody>
        <tr v-for="roman in romans" :key="roman.id">
            <td scope="row"></td>
            <td>{{roman.numeral}}</td>
            <td>{{roman.roman_number}}</td>
        </tr>
  </tbody>
</table>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    setup() {

    },
    data(){
        return{
            romans:[]
        }
    },
    methods:{
       async getData()
        {
          await axios.get('api/getRoman').then(res => {
              console.log(res.data)
               return this.romans = res.data
            }).catch(err => {
                return err.response.data
            })
        }
    },
    mounted(){
        this.getData()
    },
     computed: {
        entries(){
            if (romans) return romans
            return []
          }
        }
}
</script>
