<template>
    <div class=" w-full relative bg-slate-100">
    <Sidennav>
      <h1 class="m-10 text-4xl font-bold text-gray-700">รายการพนักงาน</h1>  
        <data-table :data="staffs" :rows-per-page="rowsPerPage" />
      </Sidennav>
  </div>
</template>

<script>
import DataTable from "@/components/DataTableStaff.vue";
import Sidennav from "@/components/Sidennav.vue";

export default {
    components: {
    DataTable,
    Sidennav,
  },
  data() {
    return {
      staffs: []
    };
  },
  methods:{
    fetch_staff() {
            axios
                .get("/fetch_staff")
                .then((response) => {
                    this.staffs = response.data;
                    // console.log(this.staffs);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
  },
  mounted() {
        this.fetch_staff();
  },
};
</script>


<style>

</style>