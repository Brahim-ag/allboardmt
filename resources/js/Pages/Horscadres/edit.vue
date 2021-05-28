<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modification Détachement Hors Cadres
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
                <div class="row">
                    <div class="col-md-6 order-md-2 mb-6">
                        <hr />
                        <div class="form-group">
                            <strong>Administration d'Origine :</strong>
                            <input
                                required
                                type="text"
                                v-model="horscadreData.source"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <strong>Administration d'Accueil :</strong>
                            <input
                                required
                                type="text"
                                v-model="horscadreData.focus"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <strong>Mission :</strong>
                            <input
                                required
                                type="text"
                                v-model="horscadreData.mission"
                                class="form-control"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Type de Mouvement :</strong>
                            <select
                                class="form-control"
                                v-model="horscadreData.typeM"
                            >
                                <option>Hors-cadre</option>
                                <option>Reconduction</option>
                                <option>Réintégration</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <strong>Motif :</strong>
                            <select
                                class="custom-select d-block w-100"
                                id="state"
                                v-model="horscadreData.motif"
                            >
                                <option>
                                    Fonction de Membre du Gouvernement - وظيفة
                                    عضو في الحكومة
                                </option>
                                <option>
                                    Mandat Electif Permanent dans une
                                    Institution Nationale - عهدة انتخابية دائمة
                                    في مؤسسة وطنية
                                </option>
                                <option>
                                    Mandat Electif Permanent dans une
                                    Collectivité Territoriale - عهدة انتخابية
                                    دائمة في جماعة إقليمية
                                </option>
                                <option>
                                    Fonction Supérieure de l'Etat - وظيفة عليا
                                    للدولة
                                </option>
                                <option>
                                    Poste Supérieur dans Institution- منصب عالٍ
                                    في مؤسسة
                                </option>
                                <option>
                                    Poste Supérieur dans uneAdministration
                                    Publique- منصب عالٍ في إدارة عمومية
                                </option>
                                <option>
                                    Mandat Syndical Permanent - عهدة نقابية
                                    دائمة
                                </option>
                                <option>
                                    Suivre une Formation Prévue par les Statuts
                                    Particuliers- متابعة تكوين منصوص عليه في
                                    القوانين الأساسية الخاصة
                                </option>
                                <option>
                                    Représenter l'Etat Auprès un Organismes
                                    Internationaux- تمثيل الدولة في هيئات دولية
                                </option>
                                <option>
                                    Représenter l'Etat Auprès d'Institutions
                                    Internationaux- تمثيل الدولة في مؤسسات دولية
                                </option>
                                <option>
                                    Suivre une Formation - متابعة تكوين
                                </option>
                                <option>
                                    Suivre des Etudes - متابعة دراسات
                                </option>
                                <option>
                                    Institution dans un Grade autre que son
                                    Grade d'Origine - نشاطات لدى مؤسسة في رتبة
                                    غير رتبته الأصلية
                                </option>
                                <option>
                                    Administration Publique dans un Grade autre
                                    que son Grade d'Origine - نشاطات لدى إدارة
                                    عمومية أخرى في رتبة غير رتبته الأصلية
                                </option>
                                <option>
                                    Fonctions de Direction auprès d'Entreprises
                                    dans lesquels l'Etat Détient tout ou partie
                                    du Capital - وظائف تأطير لدى المؤسسات التي
                                    تمتلك الدولة كل رأسمالها
                                </option>
                                <option>
                                    Fonctions de Direction auprès un Organismes
                                    dans lesquels l'Etat Détient tout ou partie
                                    du Capital - وظائف تأطير لدى الهيئات التي
                                    تمتلك الدولة كل رأسمالها
                                </option>
                                <option>
                                    Mission Organismes Internationaux - مهمة لدى
                                    مؤسسات دولية
                                </option>
                                <option>
                                    Mission d'Institutions Internationaux - مهمة
                                    لدى هيئات دولية
                                </option>
                                <option>
                                    Mission au titre de la Coopération
                                    Internationalle - مهمة في إطار التعاون دولي
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <strong>Durée : </strong>

                            <strong>Années</strong>
                            <select v-model="horscadreData.year">
                                <option v-for="i in 10" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <strong>Mois</strong>
                            <select v-model="horscadreData.month">
                                <option v-for="i in 12" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <strong>Jours</strong>

                            <select v-model="horscadreData.day">
                                <option v-for="i in 31" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Numéro d'Acte :</strong>
                        <input
                            required
                            type="number"
                            v-model="horscadreData.number"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <strong>Date de Signature d'Acte :</strong>
                        <input
                            required
                            type="date"
                            v-model="horscadreData.dateSign"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <strong>Date d'Effet d'Acte :</strong>
                        <input
                            required
                            type="date"
                            v-model="horscadreData.dateEffe"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <strong>Numéro de Visa CF :</strong>
                        <input
                            required
                            type="number"
                            v-model="horscadreData.numberCf"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <strong>Date de Visa CF :</strong>
                        <input
                            required
                            type="date"
                            v-model="horscadreData.dateEffeCF"
                            class="form-control"
                        />
                    </div>
                </div>

                <input
                    required
                    type="hidden"
                    name="employee_id"
                    v-model="horscadreData.employee_id"
                />
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
            horscadreData: this.Horscadre,
            domaine: [],
        };
    },
    props: ["Horscadre"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .put(
                    "/api/horscadre/update/" + this.horscadreData.id,
                    this.horscadreData
                )

                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/horscadre/" + this.horscadreData.employee_id;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.domainList();
    },
};
</script>
