<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Informations d'employé : {{ employe.name }} {{ employe.lastname }} |
        {{ employe.lastnameAr }}
        {{ employe.nameAr }}
      </h2>
    </template>
    <navbar :info="employe.id" />
    <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
      <div class="flex-auto">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
          <div class="px-2 py-5 sm:px-2">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
             Informations d'employé
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
              Données personnelles et application
.
            </p>
          </div>
          <div class="border-t border-gray-200">
            <dl>
              <div
                class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
                <dt class="text-sm font-medium text-gray-500">
                  Numéro d'Identification National
                </dt>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.nin }}
                </dd>
              </div>

              <div
                class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
                <dt class="text-sm font-medium text-gray-500">
                  Date de Naissance
                </dt>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.dataNaiss }}
                </dd>
              </div>
            </dl>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Sexe</dt>

            <dd
              class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
              v-if="employe.sexe === 'Masculin'"
            >
              Masculin
            </dd>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" v-else>
              Féminin
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Wilaya de naissance
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.wilaya }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Daïra de naissance
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.dairaNaiss }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Commune de naissance
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.cityNaiss }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Adresse</dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.addres }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Nationalité</dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nationalite }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Nom et Prénom de la Mère
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nameMother }}
              {{ employe.lastnameMother }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Situation Familiale 
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.situation }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Groupe Sanguin  </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bloodType }}
            </dd>
          </div>

          <div class="col-md-4"></div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Logement d'Astreinte  
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.logement }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Numéro de Téléphone   
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.telephone }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Email  </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.email }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Numéro de compte bancaire ou CCP
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankNumber }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Agence bancaire</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankName }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">
              Numéro Sécurité Sociale
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NsocialSecure }}
            </dd>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Agence mutuelle  </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.mutuAgence }}
            </dd>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dt class="text-sm font-medium text-gray-500">Numéro Mutuelle </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NMutu }}
            </dd>
          </div>
        </div>

        <h3></h3>
      </div>
      <div class="flex-auto">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg left-0 top-0">
          <div class="px-2 py-5 sm:px-2">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
             معلومات الموظف

            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
              التفاصيل الشخصية والتطبيق
            </p>
          </div>
          <div class="border-t border-gray-200">
            <dl>
              <div
                class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
               

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.nin }}
                </dd>
                 <dt class="text-sm font-medium text-gray-500">
                  رقم التعريف الوطني
                </dt>
              </div>

              <div
                class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
              >
                

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ employe.dataNaiss }}
                </dd>
                <dt class="text-sm font-medium text-gray-500">تاريخ الميلاد</dt>
              </div>
            </dl>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >

            <dd
              class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"
              v-if="employe.sexe === 'Masculin'"
            >
              ذكر
            </dd>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" v-else>
              أنثى
            </dd>
            <dt class="text-sm font-medium text-gray-500">الجنس</dt>

          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.wilaya }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">مكان الميلاد</dt>

          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.dairaNaiss }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">دائرة الميلاد</dt>

          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.cityNaiss }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">البلدية الميلاد</dt>

          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.addresAr }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">العنوان</dt>

          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nationalite }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">الجنسية</dt>

          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.nameMotherAr }}
              {{ employe.lastnameMotherAr }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">اسم و لقب الأم</dt>

          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.situation }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">الحالة العائلية</dt>

          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bloodType }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">فصيلة الدم   </dt>

          </div>

          <div class="col-md-4"></div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.logement }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">سكن وظيفي</dt>

          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.telephone }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">رقم الهاتف   </dt>

          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.email }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">البريد الإلكتروني</dt>

          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
         
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankNumber }}
            </dd>
               <dt class="text-sm font-medium text-gray-500">
              رقم الحساب البنكي او البريدي
            </dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.bankName }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">
              الحساب البنكي او البريدي
            </dt>
          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
           

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NsocialSecure }}
            </dd>
             <dt class="text-sm font-medium text-gray-500">
              رقم الإشتراك الضمان الاجتماعي
            </dt>
          </div>

          <div
            class="bg-white-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.mutuAgence }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">التعاضدية  </dt>

          </div>

          <div
            class="bg-gray-50 px-2 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-2"
          >
            

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{ employe.NMutu }}
            </dd>
            <dt class="text-sm font-medium text-gray-500">
              رقم الإشتراك في التعاضدية  
            </dt>
          </div>
        </div>

        <h3></h3>
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
import Navbar from "@/Jetstream/Navbar";

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
    Navbar,
  },
  props: ["employee"],

  data: function () {
    return {
      employe: this.employee,
    };
  },
  methods: {},
  created() {},
  computed: {
    // user() {
    //     return this.$page.props.auth.user;
    // },
  },
};
</script>
