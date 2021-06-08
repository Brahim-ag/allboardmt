<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 Hors Cadres
            </h2>
        </template>
        <div>
            <div>
                <div class="row">
                    <div>
                        <h3>Modification Détachement Hors Cadres</h3>
                        <hr />
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Administration d'Origine :</label>
                            <input
                                required
                                type="text"
                                v-model="HorscadreData.source"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Administration d'Accueil :</label>
                            <input
                                required
                                type="text"
                                v-model="HorscadreData.focus"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>
                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Mission :</label>
                            <input
                                required
                                type="text"
                                v-model="HorscadreData.mission"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            />
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Type de Mouvement :</label>
                            <select
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                v-model="HorscadreData.typeM"
                            >
                                <option>Hors-cadre</option>
                                <option>Reconduction</option>
                                <option>Réintégration</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label  class="block text-sm font-medium text-gray-700">Motif :</label>
                            <select
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                id="state"
                                v-model="HorscadreData.motif"
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
                            <label  class="block text-sm font-medium text-gray-700">Durée : </label>

                            <label  class="block text-sm font-medium text-gray-700">Années</label>
                            <select v-model="HorscadreData.year">
                                <option v-for="i in 10" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <label  class="block text-sm font-medium text-gray-700">Mois</label>
                            <select v-model="HorscadreData.month">
                                <option v-for="i in 12" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                            <label  class="block text-sm font-medium text-gray-700">Jours</label>

                            <select v-model="HorscadreData.day">
                                <option v-for="i in 31" :key="i">
                                    {{ i }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Numéro d'Acte :</label>
                        <input
                            required
                            type="number"
                            v-model="HorscadreData.number"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de Signature d'Acte :</label>
                        <input
                            required
                            type="date"
                            v-model="HorscadreData.dateSign"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date d'Effet d'Acte :</label>
                        <input
                            required
                            type="date"
                            v-model="HorscadreData.dateEffe"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Numéro de Visa CF :</label>
                        <input
                            required
                            type="number"
                            v-model="HorscadreData.numberCf"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de Visa CF :</label>
                        <input
                            required
                            type="date"
                            v-model="HorscadreData.dateEffeCF"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        />
                    </div>
                </div>

                <input
                    required
                    type="hidden"
                    v-model="HorscadreData.employee_id"
                />
            </div>
        </div>

        <button @click="postData()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
            HorscadreData: {},
            domaine: [],
        };
    },
    props: ["employee_id"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .post("/api/horscadre/store", this.HorscadreData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/horscadre/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.HorscadreData.employee_id = this.employee_id;
    },
};
</script>
