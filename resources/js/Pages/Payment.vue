<template>
    <div class="w-full relative bg-slate-100">
        <Sidennav>
            <div class="flex w-full h-full p-5 gap-5">
                <div class="w-3/6">
                    <div
                        class="p-5 w-full bg-white rounded-lg border border-gray-200 shadow-lg"
                    >
                        <div class="text-left text-gray-500 text-sm">
                            <div class="py-2">
                                <h1 class="text-xl text-gray-700 font-bold">
                                    ข้อมูลโต๊ะหมายเลข 1
                                </h1>
                            </div>
                            <hr class="my-2 border-gray-300 border-1" />
                            <div
                                class="flex justify-between text-gray-600 font-bold"
                            >
                                <p class="py-1">
                                    เลที่ : <span>800560002</span>
                                </p>
                                <p class="py-1">โต๊ะหมายเลข <span>1</span></p>
                            </div>
                            <div>
                                <p class="py-1">
                                    ประเภท : <span>Buffe 399</span>
                                </p>
                            </div>
                            <div class="space-y-1">
                                <p class="py-1">ผู้ใหญ่ : <span>1</span></p>
                                <p class="py-1">เด็ก : <span>2</span></p>
                            </div>
                            <div>
                                <p class="py-1">
                                    ผู้รับรายการ : <span>Nida</span>
                                </p>
                            </div>
                            <div class="flex justify-between">
                                <p class="py-1">
                                    วันที่ : <span>2022-04-01</span>
                                </p>
                                <p class="py-1">เวลา : <span>16:45</span>น.</p>
                            </div>
                        </div>
                        <hr class="my-2 border-gray-300 border-1" />
                        <div class="text-sm">
                            <table class="w-full">
                                <thead class="text-lg font-bold text-gray-600">
                                    <tr>
                                        <td class="text-left bg-orange-100">
                                            รายการ
                                        </td>
                                        <td
                                            class="w-1/4 text-center bg-orange-100"
                                        >
                                            จำนวน
                                        </td>
                                        <td
                                            class="w-1/4 text-right bg-orange-100"
                                        >
                                            ราคา
                                        </td>
                                        <td
                                            class="w-1/4 text-right bg-orange-100"
                                        >
                                            ราคารวม
                                        </td>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-500">
                                    <tr>
                                        <td class="text-left">ผู้ใหญ่</td>
                                        <td class="text-center">2</td>
                                        <td class="text-right">399.00</td>
                                        <td class="text-right">798.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">เด็ก</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">199.00</td>
                                        <td class="text-right">199.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="my-2 border-gray-300 border-1" />
                        <div class="text-sm text-gray-600 font-bold">
                            <div class="flex justify-between py-1">
                                <p>ส่วนลด</p>
                                <p class="text-orange-500">0.00</p>
                            </div>
                            <div class="flex justify-between py-1">
                                <p>VAT 7%</p>
                                <p class="text-orange-500">69.825</p>
                            </div>
                            <div class="flex justify-between py-1">
                                <p>ทั้งหมดที่ต้องชำระ</p>
                                <p class="text-orange-500">997.5</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-5 mt-5 bg-white h-40 rounded-lg border border-gray-200 shadow-lg"
                    >
                        <div class="pb-2">
                            <h1 class="text-xl text-gray-700 font-bold">
                                เพิ่มเติม
                            </h1>
                        </div>
                        <hr class="my-2 border-gray-300 border-1" />
                        <div
                            class="flex items-center space-x-2 hue-rotate h-20"
                        >
                            <button
                                class="px-4 py-2 bg-orange-400 text-white shadow-md rounded-md hover:bg-orange-500"
                            >
                                โค้ดส่วนลด
                            </button>
                            <a href="invoice"
                                ><button
                                    class="px-4 py-2 bg-orange-400 text-white shadow-md rounded-md hover:bg-orange-500"
                                >
                                    ใบแจ้งหนี้
                                </button></a
                            >
                        </div>
                    </div>
                </div>
                <div class="w-3/6">
                    <div
                        class="p-5 h-full bg-white rounded-lg border-gray-200 shadow-lg"
                    >
                        <div class="py-2">
                            <div class="flex justify-between pb-2">
                                <h1 class="text-xl text-gray-700 font-bold">
                                    ยอดที่ต้องชำระ
                                </h1>
                                <div
                                    class="flex text-lg text-gray-700 font-bold gap-5"
                                >
                                    <span>{{ 997.5 }}</span>
                                    <p>บาท</p>
                                </div>
                            </div>
                            <div class="flex gap-4"></div>
                        </div>
                        <hr class="my-2 border-gray-300 border-1" />
                        <div class="py-2">
                            <div class="pb-2">
                                <h1 class="text-xl text-gray-700 font-bold">
                                    เลือกรูปแบบการชำระ
                                </h1>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-44 h-24">
                                    <input
                                        type="radio"
                                        id="payment-1"
                                        name="payment"
                                        value="payment-1"
                                        class="hidden peer cursor-pointer"
                                        required
                                    />
                                    <label
                                        for="payment-1"
                                        class="inline-flex items-center justify-center w-full p-4 my-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-orange-500 peer-checked:text-orange-500 hover:bg-gray-100 peer-checked:shadow-lg"
                                    >
                                        <div class="block">
                                            <div
                                                class="w-full text-lg font-semibold"
                                            >
                                                <img
                                                    class="w-14 -h14"
                                                    src="../../imgs/cash.png"
                                                    alt="payment1"
                                                />
                                            </div>
                                        </div>
                                    </label>
                                    <p
                                        for="payment-2"
                                        class="text-center text-gray-600 font-bold peer-checked:text-orange-500"
                                    >
                                        เงินสด
                                    </p>
                                </div>
                                <div class="w-44 h-24">
                                    <input
                                        type="radio"
                                        id="payment-2"
                                        name="payment"
                                        value="payment-2"
                                        class="hidden peer cursor-pointer"
                                        required
                                    />
                                    <label
                                        for="payment-2"
                                        class="inline-flex items-center justify-center w-full p-4 my-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-orange-500 peer-checked:text-orange-500 hover:bg-gray-100 peer-checked:shadow-lg"
                                    >
                                        <div class="block">
                                            <div
                                                class="w-full text-lg font-semibold"
                                            >
                                                <img
                                                    class="w-14 -h14"
                                                    src="../../imgs/wallet.png"
                                                    alt="payment2"
                                                />
                                            </div>
                                        </div>
                                    </label>
                                    <p
                                        for="payment-2"
                                        class="text-center text-gray-600 font-bold peer-checked:text-orange-500"
                                    >
                                        โอนจ่าย
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-11 border-gray-300 border-1" />
                        <div class="py-2">
                            <div
                                class="flex items-center justify-between pt-3 w-full"
                            >
                                <h1
                                    class="py-2 text-xl text-gray-700 font-bold"
                                >
                                    เงินที่ได้รับ
                                </h1>
                                <div>
                                    <input
                                        class="w-full border text-xl text-right font-bold text-gray-700 border-gray-400 rounded-lg"
                                        type="text"
                                        name="bill_paymennt"
                                        id="bill_paymennt"
                                        v-model="billPayment"
                                    />
                                </div>
                            </div>
                            <div
                                class="grid mt-5 grid-cols-4 gap-1 w-full h-64 text-xl font-bold"
                            >
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(1)"
                                >
                                    1
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(2)"
                                >
                                    2
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(3)"
                                >
                                    3
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="clearAndAddResult()"
                                >
                                    พอดี
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(4)"
                                >
                                    4
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(5)"
                                >
                                    5
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(6)"
                                >
                                    6
                                </button>
                                <div
                                    class="col-span-1 p-1 text-white rounded"
                                ></div>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(7)"
                                >
                                    7
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(8)"
                                >
                                    8
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(9)"
                                >
                                    9
                                </button>
                                <div
                                    class="col-span-1 p-1 text-white rounded"
                                ></div>
                                <button
                                    class="col-span-2 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addToInput(0)"
                                >
                                    0
                                </button>
                                <button
                                    class="font-bold text-4xl col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="addDot()"
                                >
                                    .
                                </button>
                                <button
                                    class="col-span-1 p-1 bg-gray-100 text-gray-800 border-2 border-gray-300 rounded"
                                    @click="clear()"
                                >
                                    C
                                </button>
                            </div>

                            <button
                                class="w-full mt-4 px-4 py-4 bg-orange-400 text-white text-2xl shadow-md rounded-md hover:bg-orange-500"
                            >
                                ชำระเงิน
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </Sidennav>
    </div>
</template>

<script>
import Sidennav from "@/components/Sidennav.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Sidennav,
    },
    data() {
        return {
            billPayment: "", // ข้อมูลใน input
        };
    },
    methods: {
        addToInput(value) {
            // เพิ่มค่าที่ถูกคลิกลงใน input
            this.billPayment += value;
            console.log(value);
        },
        addDot() {
            // เพิ่ม "." ลงใน input หากยังไม่มี
            if (!this.billPayment.includes(".")) {
                this.billPayment += ".";
            }
        },
        clearAndAddResult() {
            // เคลียร์ค่าใน input
            this.billPayment = "";
            // เพิ่มผลรวมทั้งหมดลงใน input
            const result = this.calculateTotal(); // สมมติว่าคุณมีฟังก์ชัน calculateTotal ที่คำนวณผลรวมทั้งหมด
            this.billPayment = result.toString();
        },
        calculateTotal() {
            return 997.5;
        },
        clear() {
            this.billPayment = "";
        },
        isPayment() {
            const formData = new FormData();
            formData.append("bills_id", this.id);
            formData.append("shop_id", 1);
            formData.append("staff_id", 1);
            formData.append("table", this.table);
            formData.append("customer_adult", this.editcustomer_adult);
            formData.append("customer_children", this.editcustomer_children);
            formData.append("customer_baby", this.editcustomer_baby);
            formData.append("main_package", this.editpackage_main);
            formData.append("secondary_package", this.editpackage_secondary);
            formData.append("status", 1);
            formData.append("new_table", this.new_table_number);
            formData.append("status", 1);

            return;

            axios
                .post("/payment_bills", formData)
                .then((response) => {
                    console.log(response);
                    this.isRegistable = false;
                    this.isModalregistable = false;
                    this.isConfirmtable = false;
                    this.fetch_table();
                    this.table = "";
                    this.customer_adult = "";
                    this.customer_children = "";
                    this.customer_baby = "";
                    this.package_main = "";
                    this.package_secondary = "";
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
