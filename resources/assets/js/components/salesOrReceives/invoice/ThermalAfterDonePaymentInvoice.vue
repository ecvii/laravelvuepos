<template>
    <div style="visibility: hidden; height: 0 !important; overflow-y: hidden; padding: 0 10px !important;">
        <div id="printMe" v-html="rawHtml"/>
    </div>

</template>

<script>
import axiosGetPost from "../../../helper/axiosGetPostCommon";
import AppFunction from "../../../js/AppFuntion";

export default {
    name: "ThermalAfterDonePaymentInvoice.vue",
    extends: axiosGetPost,
    props: [
        'printInvoice',
        'rawHtml',
        'invoiceSize'
    ],
    data() {
        return {
            printOptions: {
                printable: 'printMe',
                type: 'html',
                maxWidth: '',
                scanStyles: false,
                css: [
                    AppFunction.getAppUrl('css/invoice/80mm.css')
                ],
            },
        };
    },
    watch: {
        printInvoice: function (newVal) {
            if (newVal) {
                this.printReceipt();
            }
        }
    },
    methods: {
        printReceipt() {
            //ref: https://printjs.crabbly.com/#documentation
            printJS(this.printOptions)
            this.$emit('resetGetInvoice', false);
        },
    }

}
</script>
