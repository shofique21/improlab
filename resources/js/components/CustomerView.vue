<template>
    <div>
        <div class="box-body">
          <div class="box-header with-border" style="background-color: #0ab3b3;">
                <h3 class="box-title" style="color:#fff"> Clients List</h3><br>
          </div>
        </div>
        <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">District</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <div id="customerList">
                    <tr v-for="customer in customers" :key="customer.id">
                    <th scope="row">{{ customer.id }}</th>
                    <td>{{ customer.fullName }}</td>
                    <td>{{ customer.mobile_no }}</td>
                     <td>{{ customer.district }}</td>
                    <td>{{ customer.status }}</td>
                     <td>Details</td>
                    </tr>
                    </div>
                </tbody>
                </table>
    </div>
</template>

<script>
import Vue from 'vue';
new Vue({
    el: '#customerList',
    data() {
        return {
          customers: []
        }
      },
      created() {
      let uri = 'http://127.0.0.1:8000/api/customers';
      this.axios.get(uri).then(response => {
        this.customers = response.data.data;
        console.log(response.data);
      });
    }
});
export default {
  }
</script>
<style>
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}
.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 15px 0px;
    /* background-color: #D2D6DE; */
}
label {
    display: inline-block;
    margin-bottom: 10px;
    padding-top: 10px;
}
.sbt-row{
    width: 100%;
    padding: 20px 0px;
}
.margin-rt{
    margin-right:15px;
}
</style>