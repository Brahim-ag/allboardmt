<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                mise en recrutementnibilité
            </h2>
        </template>
        <div>
            <div class="col-md-6 order-md-2 mb-6">
                <h3>Nouveau Recrutement</h3>
                <hr />
                <div class="form-group">
                    <strong>Grade :</strong>
                    <select
                        class="custom-select d-block w-100"
                        id="state"
                        v-model="recrutementsData.grade"
                    >
                        <option
                            v-for="(d, index) in grade.corp"
                            :key="index"
                            :class="{ 'bg-blue-800 text-white': d.disable }"
                            v-bind="{ disabled: d.disable }"
                        >
                            {{ d.name }} - {{ d.postar }}
                        </option>
                        <option
                            v-for="(d, index) in grade.corpts"
                            :key="index"
                            :class="{ 'bg-blue-800 text-white': d.disable }"
                            v-bind="{ disabled: d.disable }"
                        >
                            {{ d.name }} - {{ d.postar }}
                        </option>
                        <option
                            v-for="(d, index) in grade.ovrir"
                            :key="index"
                            :class="{ 'bg-blue-800 text-white': d.disable }"
                            v-bind="{ disabled: d.disable }"
                        >
                            {{ d.name }} - {{ d.postar }}
                        </option>
                        <option
                            v-for="(d, index) in grade.agc"
                            :key="index"
                            :class="{ 'bg-blue-800 text-white': d.disable }"
                            v-bind="{ disabled: d.disable }"
                        >
                            {{ d.name }} - {{ d.postar }}
                        </option>
                        <option
                            v-for="(d, index) in grade.opgi"
                            :key="index"
                            :class="{ 'bg-blue-800 text-white': d.disable }"
                            v-bind="{ disabled: d.disable }"
                        >
                            {{ d.post }} - {{ d.postar }}
                        </option>
                        <option
                            v-for="(d, index) in grade.aadl"
                            :key="index"
                            :class="{ 'bg-blue-800 text-white': d.disable }"
                            v-bind="{ disabled: d.disable }"
                        >
                            {{ d.post }} - {{ d.postar }}
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <strong>Type de Mouvement :</strong>
                    <select
                        class="custom-select d-block w-100"
                        id="state"
                        v-model="recrutementsData.typem"
                    >
                        <option disabled>Choisir...</option>
                        <option>
                            Période réglementaire de service civil - الفترة
                            التنظيمية للخدمة المدنية
                        </option>

                        <option>
                            Concours sur Epreuves - المسابقة على أساس الاختبارات
                        </option>
                        <option>
                            Concours sur Titres - المسابقة على أساس الشهادات
                        </option>
                        <option>Test Professionnel - الفحص المهني</option>
                        <option>Recrutement Direct - التوظيف المباشر</option>
                        <option disabled>Stage ++++++.</option>
                        <option>
                            Titularisé dans son Grade - ترسيم المتربص في رتبته
                        </option>
                        <option>
                            Astreint à une Prorogation de Stage, une Seule Fois,
                            pour une Même Durée - إخضاع المتربص لفترة تربص
                            آخرلنفس المدة ولمرة واحدة فقط
                        </option>
                        <option>
                            Licencié sans Préavis ni Indemnité - تسريح المتربص
                            دون إشعار مسبق أو تعويض
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <strong>Type d'Acte :</strong>
                    <select
                        class="custom-select d-block w-100"
                        id="state"
                        v-model="recrutementsData.typep"
                    >
                        <option>Contrat</option>
                        <option>Arrêté</option>
                        <option>Décision</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Type de Fonctionnaire :" />
                    <select
                        required
                        v-model="recrutementsData.typeContra"
                        class="mt-1 block w-full"
                    >
                        <option>Titulaire</option>
                        <option>Agent Contractuel</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Numéro d'Acte/Contrat :</strong>
                    <input
                        required
                        type="number"
                        v-model="recrutementsData.number"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Date de Signature :</strong>
                    <input
                        required
                        type="date"
                        v-model="recrutementsData.dateSignature"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Date d'Effet :</strong>
                    <input
                        required
                        type="date"
                        v-model="recrutementsData.dateEffect"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Numéro de Visa CF :</strong>
                    <input
                        required
                        type="number"
                        v-model="recrutementsData.NumberVisaCf"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Date de Visa CF :</strong>
                    <input
                        required
                        type="date"
                        v-model="recrutementsData.dateVisaCf"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Date d'Installation :</strong>
                    <input
                        required
                        type="date"
                        v-model="recrutementsData.dateInsta"
                        class="form-control"
                    />
                </div>
                <div class="form-group">
                    <strong>Structure d'Affectation :</strong>
                    <input
                        required
                        type="text"
                        v-model="recrutementsData.structure"
                        class="form-control"
                    />
                </div>
            </div>
        </div>

        <button @click="postData()" class="btn btn-primary">Valider</button>
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
            recrutementsData: {},
            grade: [],
        };
    },
    props: ["employee_id"],
    methods: {
        gradeList() {
            axios
                .get("/jsonData/grade.json")
                .then((response) => (this.grade = response.data));
            //.then((response) => console.log(response.data));
        },
        postData() {
            axios
                .post("/api/recrutement/store/", this.recrutementsData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href =
                            "/recrutement/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.gradeList();
        this.recrutementsData.employee_id = this.employee_id;
    },
};
</script>
