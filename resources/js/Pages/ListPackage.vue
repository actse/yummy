<template>
    <div class="w-full min-h-screen relative">
    <div class=" mx-auto my-auto h-full bg-gradient-to-br from-indigo-200 via-red-200 to-yellow-100 border md:w-full">
      <data-table :data="main_package" :rows-per-page="rowsPerPage" />
    </div>
  </div>
</template>

<script>
import DataTable from "@/components/DataTablePackage.vue";

export default {
  components: {
    DataTable
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
