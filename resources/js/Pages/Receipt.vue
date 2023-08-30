<template>
    <Slip>
      <div class=" text-center text-lg">
          <div class="px-2 pt-2 w-full">
              <img class="mx-auto w-24 mb-4" src="../../imgs/actselogo.png">
              <h1 class="text-lg font-bold">Actse Shabu</h1>
              <div class="text-sm px-5 p-2 text-gray-500">
                  <p>70/6 ถนนพระราม 2 แขวงบางมด เขตจอมทอง กรุงเทพฯ 10150</p>
              </div>
          </div>
          <!-- <hr class="border-gray-200 border-2"> -->
          <p class="text-gray-500 text-lg">...............................................................................</p>
          <div class="px-2 pt-2 text-left text-gray-500 text-xs">
              <h1 class="pb-2 text-center text-lg text-gray-800 font-bold">ใบเสร็จชำระเงิน</h1>
              <div class="flex justify-between">
                  <p class="py-0.5">เลที่ : <span>800560002</span></p>
                  <p class="py-0.5">โต๊ะหมายเลข <span>1</span></p>
              </div>
              <div>
                  <p class="py-0.5">ประเภท : <span>Buffe 399</span></p>
              </div>
              <div class="space-y-1">
                  <p class="py-0.5">ผู้ใหญ่ : <span>1</span></p>
                  <p class="py-0.5">เด็ก : <span>2</span></p>
              </div>
              <div>
                  <p class="py-0.5">ผู้รับรายการ : <span>Nida</span></p>
              </div>
              <div>
                  <p class="py-0.5">ช่องทางการชำระ : <span>เงินสด</span></p>
              </div>
              <div class=" flex justify-between">
                  <p class="py-0.5">วันที่ : <span>2022-04-01</span></p>
                  <p class="py-0.5">เวลา : <span>16:45</span>น.</p>
              </div>
          </div>
          <!-- <hr class="border-gray-200 border-2"> -->
          <p class="text-gray-500 text-lg">...............................................................................</p>
          <div class="px-2 pt-2">
              <table class="w-full">
              <thead class="text-sm font-bold text-gray-800 ">
                  <tr>
                      <td class="text-left">รายการ</td>
                      <td class="w-14">จำนวน</td>
                      <td class="w-3">ราคา</td>
                      <td class="w-20 text-right">ราคารวม</td>
                  </tr>
              </thead>
              <tbody class="text-xs text-gray-500">
                  <tr>
                      <td class="text-left">สามชั้นสไลด์ Collar pork</td>
                      <td>5</td>
                      <td class="text-right">39</td>
                      <td class="text-right">0.00</td>
                  </tr>
              </tbody>
          </table>
          </div>
          <!-- <hr class="border-gray-200 border-2"> -->
          <p class="text-gray-500 text-lg">...............................................................................</p>
          <div class="px-2 pt-2 text-xs text-gray-600 font-bold">
              <div class="flex justify-between py-0.5">
                  <p>ส่วนลด</p>
                  <p>0.00</p>
              </div>
              <div class="flex justify-between py-0.5">
                  <p>VAT 7%</p>
                  <p>69.825</p>
              </div>
              <div class="flex justify-between py-0.5">
                  <p>ทั้งหมดที่ต้องชำระ</p>
                  <p>997.5</p>
              </div>
          </div>
          <p class="text-gray-500 text-lg">...............................................................................</p>
          <div class="px-2 pt-2 text-xs text-gray-600 font-bold">
              <div class="flex justify-between py-0.5">
                  <p>เงินสด</p>
                  <p>1,070.00</p>
              </div>
              <div class="flex justify-between py-0.5">
                  <p>เงินทอน</p>
                  <p>2.67</p>
              </div>
          </div>
          <!-- <hr class="border-gray-200 border-2"> -->
          <p class="text-gray-500 text-lg">...............................................................................</p>
          <div class="mt-9 text-xs text-center text-gray-500">
              <p class="py-0.5">ขอบคุณและขอให้โชคดี</p>
              <p class="py-0.5">Powered by Actse Shabu</p>
          </div>
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