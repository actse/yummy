<template>
    <div class=" w-full relative bg-slate-100">
    <Sidennav>
      <h1 class="m-10 text-4xl font-bold text-gray-700">รายการแพ็คเกจ</h1>  
        <data-table :data="main_package" :rows-per-page="rowsPerPage" />
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
      products: []
    };
  },
  methods:{
    fetch_list_product() {
            axios
                .get("/fetch_list_product")
                .then((response) => {
                    this.products = response.data;
                    // console.log(this.products);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
  },
  mounted() {
        this.fetch_list_product();
  },
};
</script>


<style>

</style>