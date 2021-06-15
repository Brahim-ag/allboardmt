<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Modification de recrutement
      </h2>
    </template>
    <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Grade :</label
              >
              <select
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
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
              <label class="block text-sm font-medium text-gray-700"
                >Type de Mouvement :</label
              >
              <select
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
                id="state"
                v-model="recrutementsData.typem"
              >
                <option disabled>Choisir...</option>
                <option>
                  Période réglementaire de service civil - الفترة التنظيمية
                  للخدمة المدنية
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
                  Astreint à une Prorogation de Stage, une Seule Fois, pour une
                  Même Durée - إخضاع المتربص لفترة تربص آخرلنفس المدة ولمرة
                  واحدة فقط
                </option>
                <option>
                  Licencié sans Préavis ni Indemnité - تسريح المتربص دون إشعار
                  مسبق أو تعويض
                </option>
              </select>
            </div>

            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Type d'Acte :</label
              >
              <select
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
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
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              >
                <option>Titulaire</option>
                <option>Agent Contractuel</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-2">
              <jet-label value="Type de Contrat : :" />
              <select
                required
                v-model="recrutementsData.actContrat"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              >
                <option>----------------</option>
                <option>Contrat à Durée indéterminée</option>
                <option>Contrat à Durée Déterminée</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-2">
              <jet-label value="Durée de la relation de travail  :" />
              <select
                required
                v-model="recrutementsData.dureContrat"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              >
                <option>----------------</option>
                <option>Temps plein</option>
                <option>Temps Partiel</option>
              </select>
            </div>
            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Numéro d'Acte/Contrat :</label
              >
              <input
                required
                type="number"
                v-model="recrutementsData.number"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>

            <div class="form-group">
              <jet-strong>Date PV d’Installation :</jet-strong>
              <input
                required
                type="date"
                v-model="recrutementsData.dpv"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>

            <div class="form-group">
              <jet-strong>N° PV d’Installation :</jet-strong>
              <input
                required
                type="number"
                v-model="recrutementsData.npv"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>
            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Date de Signature :</label
              >
              <input
                required
                type="date"
                v-model="recrutementsData.dateSignature"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>

            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Date d'Effet :</label
              >
              <input
                required
                type="date"
                v-model="recrutementsData.dateEffect"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>

            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Numéro de Visa CF :</label
              >
              <input
                required
                type="number"
                v-model="recrutementsData.NumberVisaCf"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>

            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Date de Visa CF :</label
              >
              <input
                required
                type="date"
                v-model="recrutementsData.dateVisaCf"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>

            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Date d'Installation :</label
              >
              <input
                required
                type="date"
                v-model="recrutementsData.dateInsta"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>
            <div class="form-group">
              <label class="block text-sm font-medium text-gray-700"
                >Structure d'Affectation :</label
              >
              <input
                required
                type="text"
                v-model="recrutementsData.structure"
                class="
                  mt-1
                  focus:ring-indigo-500
                  focus:border-indigo-500
                  block
                  w-full
                  shadow-sm
                  sm:text-sm
                  border-gray-300
                  rounded-md
                "
              />
            </div>
          </div>
          <input
            required
            type="hidden"
            v-model="recrutementsData.employee_id"
          />
        </div>

        <button
          @click="postData()"
          class="
            bg-blue-500
            hover:bg-blue-700
            text-white
            font-bold
            py-2
            px-2
            rounded
          "
        >
          Valider
        </button>
      </div>
    </div>
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
      recrutementsData: this.Recrutement,
      grade: [],
    };
  },
  props: ["Recrutement", "employee"],
  methods: {
    gradeList() {
      axios
        .get("/jsonData/grade.json")
        .then((response) => (this.grade = response.data));
      //.then((response) => console.log(response.data));
    },
    postData() {
      axios
        .put(
          "/api/recrutement/update/" + this.recrutementsData.id,
          this.recrutementsData
        )
        .then((response) => {
          if (response.status == 200) {
            window.location.href =
              "/recrutement/" + this.recrutementsData.employee_id;
          }
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  created() {
    this.gradeList();
    this.recrutementsData.typeContra = this.employee.typeContrat;
    this.recrutementsData.actContrat = this.employee.actContrat;
    this.recrutementsData.dureContrat = this.employee.timeContrat;
  },
};
</script>
