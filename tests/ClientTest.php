<?php

namespace LacunaPHP\APIClient\Tests;

use LacunaPHP\APIClient\Client;
use GuzzleHttp\Command\CommandTransaction;


class ClientTest extends \PHPUnit_Framework_TestCase {

	public function testGetFactory() {

		$factories['empire'] = 'LacunaPHP\APIClient\Command\Empire\EmpireCommandFactory';
		$factories['alliance'] = 'LacunaPHP\APIClient\Command\Alliance\AllianceCommandFactory';
		$factories['inbox'] = 'LacunaPHP\APIClient\Command\Inbox\InboxCommandFactory';
		$factories['stats'] = 'LacunaPHP\APIClient\Command\Stats\StatsCommandFactory';
		$factories['map'] = 'LacunaPHP\APIClient\Command\Map\MapCommandFactory';
		$factories['body'] = 'LacunaPHP\APIClient\Command\Body\BodyCommandFactory';
		$factories['captcha'] = 'LacunaPHP\APIClient\Command\Captcha\CaptchaCommandFactory';

		// $factories['algae'] = 'LacunaPHP\APIClient\Command\Building\Algae\AlgaeCommandFactory';
		// $factories['algaepond'] = 'LacunaPHP\APIClient\Command\Building\AlgaePond\AlgaePondCommandFactory';
		// $factories['amalgusmeadow'] = 'LacunaPHP\APIClient\Command\Building\AmalgusMeadow\AmalgusMeadowCommandFactory';
		// $factories['apple'] = 'LacunaPHP\APIClient\Command\Building\Apple\AppleCommandFactory';
		// $factories['archaeology'] = 'LacunaPHP\APIClient\Command\Building\Archaeology\ArchaeologyCommandFactory';
		// $factories['atmosphericevaporator'] = 'LacunaPHP\APIClient\Command\Building\AtmosphericEvaporator\AtmosphericEvaporatorCommandFactory';
		// $factories['beach'] = 'LacunaPHP\APIClient\Command\Building\Beach\BeachCommandFactory';
		// $factories['bean'] = 'LacunaPHP\APIClient\Command\Building\Bean\BeanCommandFactory';
		// $factories['beeldeban'] = 'LacunaPHP\APIClient\Command\Building\Beeldeban\BeeldebanCommandFactory';
		// $factories['beeldebannest'] = 'LacunaPHP\APIClient\Command\Building\BeeldebanNest\BeeldebanNestCommandFactory';
		// $factories['blackholegenerator'] = 'LacunaPHP\APIClient\Command\Building\BlackHoleGenerator\BlackHoleGeneratorCommandFactory';
		// $factories['bread'] = 'LacunaPHP\APIClient\Command\Building\Bread\BreadCommandFactory';
		// $factories['burger'] = 'LacunaPHP\APIClient\Command\Building\Burger\BurgerCommandFactory';
		// $factories['capitol'] = 'LacunaPHP\APIClient\Command\Building\Capitol\CapitolCommandFactory';
		// $factories['cheese'] = 'LacunaPHP\APIClient\Command\Building\Cheese\CheeseCommandFactory';
		// $factories['chip'] = 'LacunaPHP\APIClient\Command\Building\Chip\ChipCommandFactory';
		// $factories['cider'] = 'LacunaPHP\APIClient\Command\Building\Cider\CiderCommandFactory';
		// $factories['citadelofknope'] = 'LacunaPHP\APIClient\Command\Building\CitadelOfKnope\CitadelOfKnopeCommandFactory';
		// $factories['cloakinglab'] = 'LacunaPHP\APIClient\Command\Building\CloakingLab\CloakingLabCommandFactory';
		// $factories['corn'] = 'LacunaPHP\APIClient\Command\Building\Corn\CornCommandFactory';
		// $factories['cornmeal'] = 'LacunaPHP\APIClient\Command\Building\CornMeal\CornMealCommandFactory';
		// $factories['crashedshipsite'] = 'LacunaPHP\APIClient\Command\Building\CrashedShipSite\CrashedShipSiteCommandFactory';
		// $factories['crater'] = 'LacunaPHP\APIClient\Command\Building\Crater\CraterCommandFactory';
		// $factories['dairy'] = 'LacunaPHP\APIClient\Command\Building\Dairy\DairyCommandFactory';
		// $factories['denton'] = 'LacunaPHP\APIClient\Command\Building\Denton\DentonCommandFactory';
		// $factories['dentonbrambles'] = 'LacunaPHP\APIClient\Command\Building\DentonBrambles\DentonBramblesCommandFactory';
		// $factories['deployedbleeder'] = 'LacunaPHP\APIClient\Command\Building\DeployedBleeder\DeployedBleederCommandFactory';
		// $factories['development'] = 'LacunaPHP\APIClient\Command\Building\Development\DevelopmentCommandFactory';
		// $factories['distributioncenter'] = 'LacunaPHP\APIClient\Command\Building\DistributionCenter\DistributionCenterCommandFactory';
		// $factories['embassy'] = 'LacunaPHP\APIClient\Command\Building\Embassy\EmbassyCommandFactory';
		// $factories['energyreserve'] = 'LacunaPHP\APIClient\Command\Building\EnergyReserve\EnergyReserveCommandFactory';
		// $factories['entertainment'] = 'LacunaPHP\APIClient\Command\Building\Entertainment\EntertainmentCommandFactory';
		// $factories['espionage'] = 'LacunaPHP\APIClient\Command\Building\Espionage\EspionageCommandFactory';
		// $factories['essentiavein'] = 'LacunaPHP\APIClient\Command\Building\EssentiaVein\EssentiaVeinCommandFactory';
		// $factories['fission'] = 'LacunaPHP\APIClient\Command\Building\Fission\FissionCommandFactory';
		// $factories['fissure'] = 'LacunaPHP\APIClient\Command\Building\Fissure\FissureCommandFactory';
		// $factories['foodreserve'] = 'LacunaPHP\APIClient\Command\Building\FoodReserve\FoodReserveCommandFactory';
		// $factories['fusion'] = 'LacunaPHP\APIClient\Command\Building\Fusion\FusionCommandFactory';
		// $factories['gasgiantlab'] = 'LacunaPHP\APIClient\Command\Building\GasGiantLab\GasGiantLabCommandFactory';
		// $factories['gasgiantplatform'] = 'LacunaPHP\APIClient\Command\Building\GasGiantPlatform\GasGiantPlatformCommandFactory';
		// $factories['geneticslab'] = 'LacunaPHP\APIClient\Command\Building\GeneticsLab\GeneticsLabCommandFactory';
		// $factories['geo'] = 'LacunaPHP\APIClient\Command\Building\Geo\GeoCommandFactory';
		// $factories['geothermalvent'] = 'LacunaPHP\APIClient\Command\Building\GeoThermalVent\GeoThermalVentCommandFactory';
		// $factories['gratchsgauntlet'] = 'LacunaPHP\APIClient\Command\Building\GratchsGauntlet\GratchsGauntletCommandFactory';
		// $factories['greatballofjunk'] = 'LacunaPHP\APIClient\Command\Building\GreatBallOfJunk\GreatBallOfJunkCommandFactory';
		// $factories['grove'] = 'LacunaPHP\APIClient\Command\Building\Grove\GroveCommandFactory';
		// $factories['hallsofvrbansk'] = 'LacunaPHP\APIClient\Command\Building\HallsOfVrbansk\HallsOfVrbanskCommandFactory';
		// $factories['hydrocarbon'] = 'LacunaPHP\APIClient\Command\Building\Hydrocarbon\HydrocarbonCommandFactory';
		// $factories['intelligence'] = 'LacunaPHP\APIClient\Command\Building\Intelligence\IntelligenceCommandFactory';
		// $factories['inteltraining'] = 'LacunaPHP\APIClient\Command\Building\IntelTraining\IntelTrainingCommandFactory';
		// $factories['interdimensionalrift'] = 'LacunaPHP\APIClient\Command\Building\InterDimensionalRift\InterDimensionalRiftCommandFactory';
		// $factories['junkhengesculpture'] = 'LacunaPHP\APIClient\Command\Building\JunkHengeSculpture\JunkHengeSculptureCommandFactory';
		// $factories['kalavianruins'] = 'LacunaPHP\APIClient\Command\Building\KalavianRuins\KalavianRuinsCommandFactory';
		// $factories['kasternskeep'] = 'LacunaPHP\APIClient\Command\Building\KasternsKeep\KasternsKeepCommandFactory';
		// $factories['lake'] = 'LacunaPHP\APIClient\Command\Building\Lake\LakeCommandFactory';
		// $factories['lagoon'] = 'LacunaPHP\APIClient\Command\Building\Lagoon\LagoonCommandFactory';
		// $factories['lapis'] = 'LacunaPHP\APIClient\Command\Building\Lapis\LapisCommandFactory';
		// $factories['lapisforest'] = 'LacunaPHP\APIClient\Command\Building\LapisForest\LapisForestCommandFactory';
		// $factories['libraryofjith'] = 'LacunaPHP\APIClient\Command\Building\LibraryOfJith\LibraryOfJithCommandFactory';
		// $factories['lostcityoftyleon'] = 'LacunaPHP\APIClient\Command\Building\LostCityOfTyleon\LostCityOfTyleonCommandFactory';
		// $factories['luxuryhousing'] = 'LacunaPHP\APIClient\Command\Building\LuxuryHousing\LuxuryHousingCommandFactory';
		// $factories['malcud'] = 'LacunaPHP\APIClient\Command\Building\Malcud\MalcudCommandFactory';
		// $factories['malcudfield'] = 'LacunaPHP\APIClient\Command\Building\MalcudField\MalcudFieldCommandFactory';
		// $factories['massadshenge'] = 'LacunaPHP\APIClient\Command\Building\MassadsHenge\MassadsHengeCommandFactory';
		// $factories['mayhemtraining'] = 'LacunaPHP\APIClient\Command\Building\MayhemTraining\MayhemTrainingCommandFactory';
		// $factories['mercenariesguild'] = 'LacunaPHP\APIClient\Command\Building\MercenariesGuild\MercenariesGuildCommandFactory';
		// $factories['metaljunkarches'] = 'LacunaPHP\APIClient\Command\Building\MetalJunkArches\MetalJunkArchesCommandFactory';
		// $factories['mine'] = 'LacunaPHP\APIClient\Command\Building\Mine\MineCommandFactory';
		// $factories['miningministry'] = 'LacunaPHP\APIClient\Command\Building\MiningMinistry\MiningMinistryCommandFactory';
		// $factories['missioncommand'] = 'LacunaPHP\APIClient\Command\Building\MissionCommand\MissionCommandCommandFactory';
		// $factories['munitionslab'] = 'LacunaPHP\APIClient\Command\Building\MunitionsLab\MunitionsLabCommandFactory';
		// $factories['naturalspring'] = 'LacunaPHP\APIClient\Command\Building\NaturalSpring\NaturalSpringCommandFactory';
		// $factories['network19'] = 'LacunaPHP\APIClient\Command\Building\Network19\Network19CommandFactory';
		// $factories['observatory'] = 'LacunaPHP\APIClient\Command\Building\Observatory\ObservatoryCommandFactory';
		// $factories['oracleofanid'] = 'LacunaPHP\APIClient\Command\Building\OracleOfAnid\OracleOfAnidCommandFactory';
		// $factories['orerefinery'] = 'LacunaPHP\APIClient\Command\Building\OreRefinery\OreRefineryCommandFactory';
		// $factories['orestorage'] = 'LacunaPHP\APIClient\Command\Building\OreStorage\OreStorageCommandFactory';
		// $factories['oversight'] = 'LacunaPHP\APIClient\Command\Building\Oversight\OversightCommandFactory';
		// $factories['pancake'] = 'LacunaPHP\APIClient\Command\Building\Pancake\PancakeCommandFactory';
		// $factories['pantheonofhagness'] = 'LacunaPHP\APIClient\Command\Building\PantheonOfHagness\PantheonOfHagnessCommandFactory';
		// $factories['park'] = 'LacunaPHP\APIClient\Command\Building\Park\ParkCommandFactory';
		// $factories['pie'] = 'LacunaPHP\APIClient\Command\Building\Pie\PieCommandFactory';
		// $factories['pilottraining'] = 'LacunaPHP\APIClient\Command\Building\PilotTraining\PilotTrainingCommandFactory';
		// $factories['planetarycommand'] = 'LacunaPHP\APIClient\Command\Building\PlanetaryCommand\PlanetaryCommandCommandFactory';
		// $factories['politicstraining'] = 'LacunaPHP\APIClient\Command\Building\PoliticsTraining\PoliticsTrainingCommandFactory';
		// $factories['potato'] = 'LacunaPHP\APIClient\Command\Building\Potato\PotatoCommandFactory';
		// $factories['propulsion'] = 'LacunaPHP\APIClient\Command\Building\Propulsion\PropulsionCommandFactory';
		// $factories['pyramidjunksculpture'] = 'LacunaPHP\APIClient\Command\Building\PyramidJunkSculpture\PyramidJunkSculptureCommandFactory';
		// $factories['ravine'] = 'LacunaPHP\APIClient\Command\Building\Ravine\RavineCommandFactory';
		// $factories['rockyoutcrop'] = 'LacunaPHP\APIClient\Command\Building\RockyOutcrop\RockyOutcropCommandFactory';
		// $factories['sand'] = 'LacunaPHP\APIClient\Command\Building\Sand\SandCommandFactory';
		// $factories['saw'] = 'LacunaPHP\APIClient\Command\Building\SAW\SAWCommandFactory';
		// $factories['security'] = 'LacunaPHP\APIClient\Command\Building\Security\SecurityCommandFactory';
		// $factories['shake'] = 'LacunaPHP\APIClient\Command\Building\Shake\ShakeCommandFactory';
		// $factories['shipyard'] = 'LacunaPHP\APIClient\Command\Building\Shipyard\ShipyardCommandFactory';
		// $factories['singularity'] = 'LacunaPHP\APIClient\Command\Building\Singularity\SingularityCommandFactory';
		// $factories['soup'] = 'LacunaPHP\APIClient\Command\Building\Soup\SoupCommandFactory';
		// $factories['spacejunkpark'] = 'LacunaPHP\APIClient\Command\Building\SpaceJunkPark\SpaceJunkParkCommandFactory';
		// $factories['spaceport'] = 'LacunaPHP\APIClient\Command\Building\SpacePort\SpacePortCommandFactory';
		// $factories['spacestationlab'] = 'LacunaPHP\APIClient\Command\Building\SpaceStationLab\SpaceStationLabCommandFactory';
		// $factories['stockpile'] = 'LacunaPHP\APIClient\Command\Building\Stockpile\StockpileCommandFactory';
		// $factories['subspacesupplydepot'] = 'LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\SubspaceSupplyDepotCommandFactory';
		// $factories['supplypod'] = 'LacunaPHP\APIClient\Command\Building\SupplyPod\SupplyPodCommandFactory';
		// $factories['syrup'] = 'LacunaPHP\APIClient\Command\Building\Syrup\SyrupCommandFactory';
		// $factories['templeofthedrajilites'] = 'LacunaPHP\APIClient\Command\Building\TempleOfTheDrajilites\TempleOfTheDrajilitesCommandFactory';
		// $factories['terraforminglab'] = 'LacunaPHP\APIClient\Command\Building\TerraformingLab\TerraformingLabCommandFactory';
		// $factories['terraformingplatform'] = 'LacunaPHP\APIClient\Command\Building\TerraformingPlatform\TerraformingPlatformCommandFactory';
		// $factories['thedillonforge'] = 'LacunaPHP\APIClient\Command\Building\TheDillonForge\TheDillonForgeCommandFactory';
		// $factories['thefttraining'] = 'LacunaPHP\APIClient\Command\Building\TheftTraining\TheftTrainingCommandFactory';
		// $factories['themepark'] = 'LacunaPHP\APIClient\Command\Building\ThemePark\ThemeParkCommandFactory';
		// $factories['trade'] = 'LacunaPHP\APIClient\Command\Building\Trade\TradeCommandFactory';
		// $factories['transporter'] = 'LacunaPHP\APIClient\Command\Building\Transporter\TransporterCommandFactory';
		// $factories['university'] = 'LacunaPHP\APIClient\Command\Building\University\UniversityCommandFactory';
		// $factories['volcano'] = 'LacunaPHP\APIClient\Command\Building\Volcano\VolcanoCommandFactory';
		// $factories['wastedigester'] = 'LacunaPHP\APIClient\Command\Building\WasteDigester\WasteDigesterCommandFactory';
		// $factories['wasteenergy'] = 'LacunaPHP\APIClient\Command\Building\WasteEnergy\WasteEnergyCommandFactory';
		// $factories['wasteexchanger'] = 'LacunaPHP\APIClient\Command\Building\WasteExchanger\WasteExchangerCommandFactory';
		// $factories['wasterecycling'] = 'LacunaPHP\APIClient\Command\Building\WasteRecycling\WasteRecyclingCommandFactory';
		// $factories['wastesequestration'] = 'LacunaPHP\APIClient\Command\Building\WasteSequestration\WasteSequestrationCommandFactory';
		// $factories['wastetreatment'] = 'LacunaPHP\APIClient\Command\Building\WasteTreatment\WasteTreatmentCommandFactory';
		// $factories['waterproduction'] = 'LacunaPHP\APIClient\Command\Building\WaterProduction\WaterProductionCommandFactory';
		// $factories['waterpurification'] = 'LacunaPHP\APIClient\Command\Building\WaterPurification\WaterPurificationCommandFactory';
		// $factories['waterreclamation'] = 'LacunaPHP\APIClient\Command\Building\WaterReclamation\WaterReclamationCommandFactory';
		// $factories['waterstorage'] = 'LacunaPHP\APIClient\Command\Building\WaterStorage\WaterStorageCommandFactory';
		// $factories['wheat'] = 'LacunaPHP\APIClient\Command\Building\Wheat\WheatCommandFactory';

		// $factories['artmuseum'] = 'LacunaPHP\APIClient\Command\Building\ArtMuseum\ArtMuseumCommandFactory';
		// $factories['culinaryinstitute'] = 'LacunaPHP\APIClient\Command\Building\CulinaryInstitute\CulinaryInstituteCommandFactory';
		// $factories['ibs'] = 'LacunaPHP\APIClient\Command\Building\IBS\IBSCommandFactory';
		// $factories['operahouse'] = 'LacunaPHP\APIClient\Command\Building\OperaHouse\OperaHouseCommandFactory';
		// $factories['parliament'] = 'LacunaPHP\APIClient\Command\Building\Parliament\ParliamentCommandFactory';
		// $factories['policestation'] = 'LacunaPHP\APIClient\Command\Building\PoliceStation\PoliceStationCommandFactory';
		// $factories['stationcommand'] = 'LacunaPHP\APIClient\Command\Building\StationCommand\StationCommandCommandFactory';
		// $factories['warehouse'] = 'LacunaPHP\APIClient\Command\Building\Warehouse\WarehouseCommandFactory';

		$client = new Client('https://api.example.com');

		foreach($factories as $module => $class) {
			$factory = $client->getFactory($module);

			$this->assertInstanceOf($class, $factory);
		}
	}

	public function testSerializeRequest() {
		$command = $this->getMock('LacunaPHP\APIClient\Command\APICommandInterface');

		$command->method('getModule')
			->willReturn('module');

		$command->method('getMethod')
			->willReturn('method');

		$command->method('getParams')
			->willReturn(['hello' => 'world']);

		$command->method('getID')
			->willReturn(12);

		$client = new Client('https://api.example.com');

		$transaction = new CommandTransaction($client, $command);

		$request = $client->serializeRequest($transaction);

		$this->assertEquals(
			'POST',
			$request->getMethod()
		);

		$this->assertEquals(
			'https://api.example.com/module',
			$request->getUrl()
		);

		$expected = [
			'jsonrpc' => '2.0',
			'id'      => $command->getID(),
			'method'  => $command->getMethod(),
			'params'  => $command->getParams()
		];

		$this->assertEquals(
			$expected,
			json_decode($request->getBody(), true)
		);
	}
}
