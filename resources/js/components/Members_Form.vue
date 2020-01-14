<template>
    <div>
        <h2>Add New Member</h2>
        <form class="form-horizontal" action="/users" method="post">

        
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >First Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname" v-model="firstname">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Last Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Lastname" placeholder="Enter last name" name="lastname" v-model="lastname">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Middle Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="middlename" placeholder="Enter middle name" name="middlename" v-model="middlename">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Gender:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender" v-model="gender">
                </div>
            </div>  
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Status:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" placeholder="Enter status" name="status" v-model="status">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Occupation:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="occupation" placeholder="Enter occupation" name="occupation" v-model="occupation">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Phone Number:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phonenumber" placeholder="Enter phone number" name="phonenumber" v-model="phonenumber">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Address:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" v-model="address">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Birth Date(mm/dd/yyyy):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthdate" placeholder="Enter birthdate" name="birthdate" v-model="birthdate">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Birth Place:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthplace" placeholder="Enter birth place" name="birthplace" v-model="birthplace">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Membership date(mm/dd/yyyy):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="membershipdate" placeholder="Enter membership date" name="membershipdate" v-model="membershipdate">
                </div>
            </div>
            <div class="form-goup">
                <label class="control-label col-sm-10" for="name" >Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" v-model="email">
                </div>
            </div>
    
                <div class="col-sm-10">
                    <button v-on:click="addNewMember()" type="button" class="btn btn-default" style="background-color:green; color:white">Save</button>
                </div>
            
        </form>
    </div>
</template>
<script>
     export default {
        data(){
            return {
                firstname:'',lastname:'',middlename:'',gender:'',status:'',occupation:'',phonenumber:'',
                address:'',birthdate:'',birthplace:'',membershipdate:'',email:'',
                
            }
        },
        methods:{
           addNewMember(){
            console.log(this.firstname);

            axios.get('/api/store',{
                firstname: this.firstname,
            }).then(response => {
                console.log(response)
            }).catch(error => {
                console.log(error)
            });
        
        }
        },
        
        
        
    }
  
</script>
