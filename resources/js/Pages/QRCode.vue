<template>
  <Slip>
    <div class="text-center text-lg">
      <img class="mx-auto mb-5 w-24" src="../../imgs/actselogo.png">
      <img class="mx-auto" src="../../imgs/QR_Code.png">
      <div class="text-center  text-xl text-gray-800 font-bold my-2">แสกน QR CODE เพื่อสั่งอาหาร</div>
      <hr class="border-gray-200 border-2">
      <div class="text-left text-gray-600 my-4">
        <p>โต๊ะ : 2</p>
        <p>ประเภท : Buffe 399</p>
        <p>จำนวนลูกค้า : 4 ท่าน</p>
        <p>ผู้ใหญ่ : 2 ท่าน</p>
        <p>เด็ก : 2 ท่าน</p>
      </div>
      <hr class="border-gray-200 border-2">
      <div class="my-2 text-gray-800">เวลา : 20:00 - 22:00 น.</div>
      <hr class="border-gray-200 border-2">
    </div>
  </Slip>
</template>

<script>
import Slip from "@/Layouts/Slip.vue";
export default {
    components :{
        Slip,
    },
}
</script>

<style>

</style>