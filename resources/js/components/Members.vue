<template>

 <div class="card card-default">
      <div class="card card-body">
          
            <div class="search">
                <div class="searchicon">
                    <form action="">
                        <input type="text" v-model="search" class="searchTerm" placeholder="Search for Members">
                            <button>Reset</button>
                            
                            <button type="submit"  class="newm">
                                Add New Member
                            </button>
                   </form>
                 </div>
            </div>
        </div>
      
         
            <table class="content-member-table">
                <thead class="card-header">
                    <th>MEMBER NUMBER</th>
                    <th>FULLNAME</th>
                    <th>ADDRESS</th>
                    <th>STATUS</th>
                    
                </thead>

                <tbody>
                  
                    <tr v-for="member in filteredMembers" :key="member.data">
                            <td>
                                    {{ member.member_id }}  
                            </td>
                            <td>
                                    {{ member.last_name }}, {{ member.first_name }} {{ member.middle_name }} 
                            </td>

                            <td>
                                     {{ member.address}}  
                            </td>
                            <td>
                                     {{ member.status }}  
                            </td>
                    </tr>
                    
                       
                 
                
                </tbody>
            </table>
      </div>
 
</template>

<script>
    export default {
        data(){
            return {
               members:[],
               member:{
                   member_id: 0,
                   first_name: '',
                   middle_name:'',
                   last_name:'',
                   address:'',
                   status:''
               }
                
            }
        },
        mounted(){
            this.getMembers()
        },
        methods:{
            getMembers(){
                axios.get('/api/memberlist').then(response=>{
                    console.log(response)
                    this.members=response.data
                })
            }
        },
        computed:{
            filteredMembers: function(){
                return this.members.filter((member)=>{
                    return  member.first_name.toLowerCase().trim().match(this.search.toLowerCase().trim()) ||
                    member.last_name.toLowerCase().trim().match(this.search.toLowerCase().trim()) ||
                    member.middle_name.toLowerCase().trim().match(this.search.toLowerCase().trim()) 
                })
                
            }
            
        },
        
        
    }
  
</script>


<style>

</style>
