<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifer un employé
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
                <div class="col-md-4 order-md-2 mb-4">
                    <div class="form-group">
                        <strong>Affaire :</strong>
                        <input
                            required
                            type="text"
                            v-model="antecedData.affaire"
                            class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <strong>Qualité :</strong>
                        <input
                            required
                            type="text"
                            v-model="antecedData.quality"
                            class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <strong>Jugement Prononcé :</strong>
                        <input
                            required
                            type="text"
                            v-model="antecedData.jugement"
                            class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <strong>Instance Judiciaire :</strong>
                        <input
                            required
                            type="text"
                            v-model="antecedData.instance"
                            class="form-control"
                        />
                    </div>

                    <input
                        required
                        type="hidden"
                        v-model="antecedData.employee_id"
                        
                    />
                </div>
            </div>

        </div>

        <button @click="editAntecejudi()" class="btn btn-primary">
            Valider
        </button>
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";

import JetActionMessage from "@/Jetstream/ActionMessage";
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal";
import JetDangerButton from "@/Jetstream/DangerButton";
import JetDialogModal from "@/Jetstream/DialogModal";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetSectionBorder from "@/Jetstream/SectionBorder";
export default {
    components: {
        AppLayout,
        JetActionMessage,
        JetActionSection,
        JetButton,
        JetConfirmationModal,
        JetDangerButton,
        JetDialogModal,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
        JetSectionBorder,
    },
    data() {
        return {
            antecedData:this.antecedanjudi,
            domaine: [],
        };
    },
    props: ["antecedanjudi"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        editAntecejudi() {
            
            axios
                .put("/api/antecejudi/update/"+this.antecedData.id, this.antecedData)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href = "/antecejudi/" + this.antecedData.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
    },
};
</script>
