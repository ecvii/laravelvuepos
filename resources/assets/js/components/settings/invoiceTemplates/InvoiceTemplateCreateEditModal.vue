<template>
    <div>
        <div class="modal-layout-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="m-0">
                        {{ id ? trans('lang.edit_invoice_template') : trans('lang.add_invoice_template') }}</h4>
                </div>
                <div class="col-2 text-right">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click.prevent="">
                        <i class="la la-close icon-modal-cross"></i>
                    </button>
                </div>
            </div>
        </div>
        <template v-if="selectedInvoiceTemplate.invoice_size === 'thermal'">
            <thermal-invoice-template
                :id="id"
                :modalID="modalID"
                :templates="all_invoice_templates"
            />
        </template>
        <template v-else>
            <basic-invoice-template
                :id="id"
                :modalID="modalID"
                :templates="all_invoice_templates"
            />
        </template>

    </div>
</template>

<script>

import axiosGetPost from '../../../helper/axiosGetPostCommon';

export default {

    props: ['id', 'modalID', 'all_invoice_templates'],
    extends: axiosGetPost,
    data() {
        return {
            selectedInvoiceTemplate: {},
        }
    },
    created(){
        if (!this.id){
            this.selectedInvoiceTemplate.invoice_size= 'small'
        }
    },
    watch: {
        id: {
            handler: function (value) {
                if (this.id){
                    this.selectedInvoiceTemplate = this.all_invoice_templates.find((e) => parseInt(e.id) === parseInt(value));
                }

            }, immediate: true
        },
    },
}
</script>