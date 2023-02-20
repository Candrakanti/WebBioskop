<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $store_procedure = "
        
        DROP PROCEDURE IF EXISTS `jumlahPembelian`;

        CREATE PROCEDURE `jumlahPembelian` (IN idx int)
        BEGIN
            SELECT id_customer, COUNT(id_customer) AS jumlah FROM booking GROUP BY id_customer;
        END;";

//         CREATE FUNCTION fnMyFunc()
// RETURNS TABLE AS
// RETURN 
// (
//   SELECT tenant.ID AS TenantID, 
//        SUM(ISNULL(trans.Amount,0)) AS TenantBalance 
//   FROM tblTenant tenant
//     LEFT JOIN tblTransaction trans ON tenant.ID = trans.TenantID
//   GROUP BY tenant.ID
// )


        \DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_procedure');
    }
}
