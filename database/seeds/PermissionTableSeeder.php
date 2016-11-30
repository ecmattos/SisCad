<?php 

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =
        [
            
            [
                'permission_title'          => 'Administração - Banco: Inclusão',
                'permission_slug'           => 'banks.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Banco: Alteração',
                'permission_slug'           => 'banks.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Banco: Exclusão',
                'permission_slug'           => 'banks.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Banco: Consulta',
                'permission_slug'           => 'banks.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Desligamento - Motivo: Inclusão',
                'permission_slug'           => 'members_status_reasons.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Desligamento - Motivo: Alteração',
                'permission_slug'           => 'members_status_reasons.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Desligamento - Motivo: Exclusão',
                'permission_slug'           => 'members_status_reasons.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Desligamento - Motivo: Consulta',
                'permission_slug'           => 'members_status_reasons.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Sexo: Inclusão',
                'permission_slug'           => 'genders.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sexo: Alteração',
                'permission_slug'           => 'genders.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sexo: Exclusão',
                'permission_slug'           => 'genders.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sexo: Consulta',
                'permission_slug'           => 'genders.show',
                'permission_description'    => ''
            ],


            [
                'permission_title'          => 'Administração - Região: Inclusão',
                'permission_slug'           => 'regions.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Região: Alteração',
                'permission_slug'           => 'regions.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Região: Exclusão',
                'permission_slug'           => 'regions.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Região: Consulta',
                'permission_slug'           => 'regions.show',
                'permission_description'    => ''
            ],


            [
                'permission_title'          => 'Administração - Estado: Inclusão',
                'permission_slug'           => 'states.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Estado: Alteração',
                'permission_slug'           => 'states.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Estado: Exclusão',
                'permission_slug'           => 'states.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Estado: Consulta',
                'permission_slug'           => 'states.show',
                'permission_description'    => ''
            ],


            [
                'permission_title'          => 'Administração - Cidade: Inclusão',
                'permission_slug'           => 'cities.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Cidade: Alteração',
                'permission_slug'           => 'cities.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Cidade: Exclusão',
                'permission_slug'           => 'cities.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Cidade: Consulta',
                'permission_slug'           => 'cities.show',
                'permission_description'    => ''
            ],


            [
                'permission_title'          => 'Administração - Plano: Inclusão',
                'permission_slug'           => 'plans.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Plano: Alteração',
                'permission_slug'           => 'plans.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Plano: Exclusão',
                'permission_slug'           => 'plans.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Plano: Consulta',
                'permission_slug'           => 'plans.show',
                'permission_description'    => ''
            ],


            [
                'permission_title'          => 'Administração - Associados - Situação: Inclusão',
                'permission_slug'           => 'member_statuses.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Associados - Situação: Alteração',
                'permission_slug'           => 'member_statuses.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Associados - Situação: Exclusão',
                'permission_slug'           => 'member_statuses.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Associados - Situação: Consulta',
                'permission_slug'           => 'member_statuses.show',
                'permission_description'    => ''
            ],


            [
                'permission_title'  		=> 'Associados: Inclusão',
                'permission_slug'  			=> 'members.create',
                'permission_description'	=> ''
            ],
            [
                'permission_title'          => 'Associados: Alteração',
                'permission_slug'           => 'members.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Associados: Exclusão',
                'permission_slug'           => 'members.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Associados: Consulta',
                'permission_slug'           => 'members.show',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Associados: Pesquisa',
                'permission_slug'           => 'members.search',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Parceiros: Inclusão',
                'permission_slug'           => 'partners.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Parceiros: Alteração',
                'permission_slug'           => 'partners.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Parceiros: Exclusão',
                'permission_slug'           => 'partners.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Parceiros: Consulta',
                'permission_slug'           => 'partners.show',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Parceiros: Pesquisa',
                'permission_slug'           => 'dashboard.partners',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Parceiros: Pesquisa',
                'permission_slug'           => 'partners.search',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Parceiros: Relatórios',
                'permission_slug'           => 'dashboard.partners_reports',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Parceiros: Etiquetas',
                'permission_slug'           => 'dashboard.partners_labels',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Parceiros - Tipo: Inclusão',
                'permission_slug'           => 'partner_types.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Parceiros - Tipo: Alteração',
                'permission_slug'           => 'partner_types.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Parceiros - Tipo: Exclusão',
                'permission_slug'           => 'partner_types.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Parceiros - Tipo: Consulta',
                'permission_slug'           => 'partner_types.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Usuários: Inclusão',
                'permission_slug'           => 'users.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Usuários: Alteração',
                'permission_slug'           => 'users.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Usuários: Exclusão',
                'permission_slug'           => 'users.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Usuários: Consulta',
                'permission_slug'           => 'users.show',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração: Usuários',
                'permission_slug'           => 'users.index',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Associados: Relatórios',
                'permission_slug'           => 'dashboard.members_reports',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Associados: Etiquetas',
                'permission_slug'           => 'dashboard.members_labels',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Associados: Pesquisa',
                'permission_slug'           => 'dashboard.members',
                'permission_description'    => ''
            ],
            
            [
                'permission_title'          => 'Administração - Pagamentos - Situação: Inclusão',
                'permission_slug'           => 'payment_statuses.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Situação: Alteração',
                'permission_slug'           => 'payment_statuses.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Situação: Exclusão',
                'permission_slug'           => 'payment_statuses.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Situação: Consulta',
                'permission_slug'           => 'payment_statuses.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Pagamentos - Finalidade: Inclusão',
                'permission_slug'           => 'payment_reasons.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Finalidade: Alteração',
                'permission_slug'           => 'payment_reasons.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Finalidade: Exclusão',
                'permission_slug'           => 'payment_reasons.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Finalidade: Consulta',
                'permission_slug'           => 'payment_reasons.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Pagamentos - Método: Inclusão',
                'permission_slug'           => 'payment_methods.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Método: Alteração',
                'permission_slug'           => 'payment_methods.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Método: Exclusão',
                'permission_slug'           => 'payment_methods.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Pagamentos - Método: Consulta',
                'permission_slug'           => 'payment_methods.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Tipos de Ativos: Inclusão',
                'permission_slug'           => 'patrimonial_types.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Tipos de Ativos: Alteração',
                'permission_slug'           => 'patrimonial_types.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Tipos de Ativos: Exclusão',
                'permission_slug'           => 'patrimonial_types.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Tipos de Ativos: Consulta',
                'permission_slug'           => 'patrimonial_types.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Sub-tipos de Ativos: Inclusão',
                'permission_slug'           => 'patrimonial_sub_types.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sub-tipos de Ativos: Alteração',
                'permission_slug'           => 'patrimonial_sub_types.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sub-tipos de Ativos: Exclusão',
                'permission_slug'           => 'patrimonial_sub_types.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sub-tipos de Ativos: Consulta',
                'permission_slug'           => 'patrimonial_sub_types.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Marcas de Ativos: Inclusão',
                'permission_slug'           => 'patrimonial_brands.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Marcas de Ativos: Alteração',
                'permission_slug'           => 'patrimonial_brands.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Marcas de Ativos: Exclusão',
                'permission_slug'           => 'patrimonial_brands.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Marcas de Ativos: Consulta',
                'permission_slug'           => 'patrimonial_brands.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Modelos de Ativos: Inclusão',
                'permission_slug'           => 'patrimonial_models.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Modelos de Ativos: Alteração',
                'permission_slug'           => 'patrimonial_models.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Modelos de Ativos: Exclusão',
                'permission_slug'           => 'patrimonial_models.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Setores de Ativos: Consulta',
                'permission_slug'           => 'patrimonial_models.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Setores de Ativos: Inclusão',
                'permission_slug'           => 'patrimonial_sectors.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Setores de Ativos: Alteração',
                'permission_slug'           => 'patrimonial_sectors.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Setores de Ativos: Exclusão',
                'permission_slug'           => 'patrimonial_sectors.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Setores de Ativos: Consulta',
                'permission_slug'           => 'patrimonial_sectors.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Administração - Sub-setores de Ativos: Inclusão',
                'permission_slug'           => 'patrimonial_sub_sectors.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sub-setores de Ativos: Alteração',
                'permission_slug'           => 'patrimonial_sub_sectors.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sub-setores de Ativos: Exclusão',
                'permission_slug'           => 'patrimonial_sub_sectors.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Sub-setores de Ativos: Consulta',
                'permission_slug'           => 'patrimonial_sub_sectors.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Filiais: Inclusão',
                'permission_slug'           => 'affiliated_societies.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Filiais: Alteração',
                'permission_slug'           => 'affiliated_societies.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Filiais: Exclusão',
                'permission_slug'           => 'affiliated_societies.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Filiais: Consulta',
                'permission_slug'           => 'affiliated_societies.show',
                'permission_description'    => ''
            ],

            [
                'permission_title'          => 'Fornecedores: Inclusão',
                'permission_slug'           => 'providers.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Fornecedores: Alteração',
                'permission_slug'           => 'providers.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Fornecedores: Exclusão',
                'permission_slug'           => 'providers.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Fornecedores: Consulta',
                'permission_slug'           => 'providers.show',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Ativos: Inclusão',
                'permission_slug'           => 'patrimonials.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Ativos: Alteração',
                'permission_slug'           => 'patrimonials.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Ativos: Exclusão',
                'permission_slug'           => 'patrimonials.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Ativos: Consulta',
                'permission_slug'           => 'patrimonials.show',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Tipos Movimentações Ativos: Inclusão',
                'permission_slug'           => 'patrimonial_movement_types.create',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Tipos Movimentações Ativos: Alteração',
                'permission_slug'           => 'patrimonial_movement_types.edit',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Tipos Movimentações Ativos: Exclusão',
                'permission_slug'           => 'patrimonial_movement_types.destroy',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Administração - Tipos Movimentações Ativos: Consulta',
                'permission_slug'           => 'patrimonial_movement_types.show',
                'permission_description'    => ''
            ],
            [
                'permission_title'          => 'Ativos: Pesquisa',
                'permission_slug'           => 'patrimonials.search',
                'permission_description'    => ''
            ],
        ];
    
        foreach ($permissions as $permission)
        {
            \SisCad\Permission::create($permission);
        }
    }
}
