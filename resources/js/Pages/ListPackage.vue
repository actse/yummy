<template>
  <div class=" w-full relative bg-slate-100">
    <Sidennav>
      <h1 class="m-10 text-4xl font-bold text-gray-700">รายการประเภทสินค้า</h1>  
        <data-table :data="main_package" :rows-per-page="rowsPerPage" />
      </Sidennav>
  </div>
</template>

<script>
import DataTable from "@/components/DataTablePackage.vue";
import Sidennav from "@/components/Sidennav.vue";

export default {
  components: {
    DataTable,
    Sidennav,
  },
  data() {
    return {
        main_package: []
    };
  },
  methods:{
    fetch_package_main() {
            axios
                .get("/fetch_package")
                .then((response) => {
                    if (response.data != []) {
                        this.main_package = response.data;
                        // console.log(response.data);
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
  },
  mounted() {
        this.fetch_package_main();
  },
};
</script>
