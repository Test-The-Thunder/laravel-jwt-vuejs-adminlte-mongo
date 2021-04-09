<template>
    <div>
        <loading :active.sync="isLoading"
            color="#546af7"
            background-color="#FFFFFF"
            loader="dots"
            :height=150
            :width=170>
        </loading>
    </div>
</template>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<script>
    // Import component
    import Loading from 'vue-loading-overlay';
    // Import stylesheet
    import 'vue-loading-overlay/dist/vue-loading.css';

    export default {
        props: ['item','bus'],
        data() {
            return {
                isLoading: false
            }
        },
        components: {
            Loading
        },
        methods: {
            setValue(value) {
                this.isLoading = value;
            },
            redirect(value){
                this.$router.push({
                    name: value
                });
            }
        },
        created: function() {
            this.bus.$on("LoadingOn", () => {
                this.setValue(true);
            });
            this.bus.$on("LoadingOff", () => {
                this.setValue(false);
            });
            this.bus.$on("ProgressBarLoading", () => {
                this.$Progress.start();
            })
            this.bus.$on("ProgressBarFinish", () => {
                this.$Progress.finish();
            })
            this.bus.$on("ProgressBarFail", () => {
                this.$Progress.fail();
            })
            this.bus.$on("ProgressBarFailerror", (message) => {
                this.$Progress.fail();
                Toast.fire({icon: "error", title: message });
            })
            this.bus.$on("SwalSuccess", (title,message) => {
                Swal.fire(title, message, "success");
            })
            this.bus.$on("SwalWarning", (title,message) => {
                Swal.fire(title, message, "warning");
            })
            this.bus.$on("ToastSuccess", (message) => {
                Toast.fire({icon: "success", title: message });
            })
            this.bus.$on("ToastWarning", (message) => {
                Toast.fire({icon: "warning", title: message });
            })
            this.bus.$on("ToastError", (message) => {
                Toast.fire({icon: "error", title: message });
            })
            this.bus.$on("LoadingOffSuccess", (value,route) => {
                Toast.fire({icon: "success", title: value});
                if(route != undefined){
                    this.redirect(route);
                }
                this.setValue(false);
            });
            this.bus.$on("LoadingOffError", (message) => {
                Toast.fire({icon: "error", title: message});
                this.setValue(false);
            });
            this.bus.$on("LoadingOffWarning", (message) => {
                Toast.fire({icon: "warning", title: message});
                this.setValue(false);
            });
        }
    }
</script>
