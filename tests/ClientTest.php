<?php

namespace LacunaPHP\APIClient\Tests;

use LacunaPHP\APIClient\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Command\CommandTransaction;


class ClientTest extends \PHPUnit_Framework_TestCase {

	/*
	public function testGetFactory() {
		$factories = [
			'empire' => 'LacunaPHP\APIClient\Command\Empire\EmpireCommandFactory',
			'alliance' => 'LacunaPHP\APIClient\Command\Alliance\AllianceCommandFactory',
			'inbox' => 'LacunaPHP\APIClient\Command\Inbox\InboxCommandFactory',
			'stats' => 'LacunaPHP\APIClient\Command\Stats\StatsCommandFactory',
			'map' => 'LacunaPHP\APIClient\Command\Map\MapCommandFactory',
			'body' => 'LacunaPHP\APIClient\Command\Body\BodyCommandFactory',
			'captcha' => 'LacunaPHP\APIClient\Command\Captcha\CaptchaCommandFactory',

			// buildings
			'algae' => 'LacunaPHP\APIClient\Command\Building\Algae\AlgaeCommandFactory',
			'algaepond' => 'LacunaPHP\APIClient\Command\Building\AlgaePond\AlgaePondCommandFactory',
			'amalgusmeadow' => 'LacunaPHP\APIClient\Command\Building\AmalgusMeadow\AmalgusMeadowCommandFactory',
			'apple' => 'LacunaPHP\APIClient\Command\Building\Apple\AppleCommandFactory',
			'archaeology' => 'LacunaPHP\APIClient\Command\Building\Archaeology\ArchaeologyCommandFactory',
			'atmosphericevaporator' => 'LacunaPHP\APIClient\Command\Building\AtmosphericEvaporator\AtmosphericEvaporatorCommandFactory',
			'beach' => 'LacunaPHP\APIClient\Command\Building\Beach\BeachCommandFactory',
			'bean' => 'LacunaPHP\APIClient\Command\Building\Bean\BeanCommandFactory',
			'beeldeban' => 'LacunaPHP\APIClient\Command\Building\Beeldeban\BeeldebanCommandFactory',
			'beeldebannest' => 'LacunaPHP\APIClient\Command\Building\BeeldebanNest\BeeldebanNestCommandFactory',
			'blackholegenerator' => 'LacunaPHP\APIClient\Command\Building\BlackHoleGenerator\BlackHoleGeneratorCommandFactory',
			'bread' => 'LacunaPHP\APIClient\Command\Building\Bread\BreadCommandFactory',
			'burger' => 'LacunaPHP\APIClient\Command\Building\Burger\BurgerCommandFactory',
			'capitol' => 'LacunaPHP\APIClient\Command\Building\Capitol\CapitolCommandFactory',
			'cheese' => 'LacunaPHP\APIClient\Command\Building\Cheese\CheeseCommandFactory',
			'chip' => 'LacunaPHP\APIClient\Command\Building\Chip\ChipCommandFactory',
			'cider' => 'LacunaPHP\APIClient\Command\Building\Cider\CiderCommandFactory',
			'citadelofknope' => 'LacunaPHP\APIClient\Command\Building\CitadelOfKnope\CitadelOfKnopeCommandFactory',
			'cloakinglab' => 'LacunaPHP\APIClient\Command\Building\CloakingLab\CloakingLabCommandFactory',
			'corn' => 'LacunaPHP\APIClient\Command\Building\Corn\CornCommandFactory',
			'cornmeal' => 'LacunaPHP\APIClient\Command\Building\CornMeal\CornMealCommandFactory',
			'crashedshipsite' => 'LacunaPHP\APIClient\Command\Building\CrashedShipSite\CrashedShipSiteCommandFactory',
			'crater' => 'LacunaPHP\APIClient\Command\Building\Crater\CraterCommandFactory',
			'dairy' => 'LacunaPHP\APIClient\Command\Building\Dairy\DairyCommandFactory',
			'denton' => 'LacunaPHP\APIClient\Command\Building\Denton\DentonCommandFactory',
			'dentonbrambles' => 'LacunaPHP\APIClient\Command\Building\DentonBrambles\DentonBramblesCommandFactory',
			'deployedbleeder' => 'LacunaPHP\APIClient\Command\Building\DeployedBleeder\DeployedBleederCommandFactory',
			'development' => 'LacunaPHP\APIClient\Command\Building\Development\DevelopmentCommandFactory',
			'distributioncenter' => 'LacunaPHP\APIClient\Command\Building\DistributionCenter\DistributionCenterCommandFactory',
			'embassy' => 'LacunaPHP\APIClient\Command\Building\Embassy\EmbassyCommandFactory',
			'energyreserve' => 'LacunaPHP\APIClient\Command\Building\EnergyReserve\EnergyReserveCommandFactory',
			'entertainment' => 'LacunaPHP\APIClient\Command\Building\Entertainment\EntertainmentCommandFactory',
			'espionage' => 'LacunaPHP\APIClient\Command\Building\Espionage\EspionageCommandFactory',
			'essentiavein' => 'LacunaPHP\APIClient\Command\Building\EssentiaVein\EssentiaVeinCommandFactory',
			'fission' => 'LacunaPHP\APIClient\Command\Building\Fission\FissionCommandFactory',
			'fissure' => 'LacunaPHP\APIClient\Command\Building\Fissure\FissureCommandFactory',
			'foodreserve' => 'LacunaPHP\APIClient\Command\Building\FoodReserve\FoodReserveCommandFactory',
			'fusion' => 'LacunaPHP\APIClient\Command\Building\Fusion\FusionCommandFactory',
			'gasgiantlab' => 'LacunaPHP\APIClient\Command\Building\GasGiantLab\GasGiantLabCommandFactory',
			'gasgiantplatform' => 'LacunaPHP\APIClient\Command\Building\GasGiantPlatform\GasGiantPlatformCommandFactory',
			'geneticslab' => 'LacunaPHP\APIClient\Command\Building\GeneticsLab\GeneticsLabCommandFactory',
			'geo' => 'LacunaPHP\APIClient\Command\Building\Geo\GeoCommandFactory',
			'geothermalvent' => 'LacunaPHP\APIClient\Command\Building\GeoThermalVent\GeoThermalVentCommandFactory',
			'gratchsgauntlet' => 'LacunaPHP\APIClient\Command\Building\GratchsGauntlet\GratchsGauntletCommandFactory',
			'greatballofjunk' => 'LacunaPHP\APIClient\Command\Building\GreatBallOfJunk\GreatBallOfJunkCommandFactory',
			'grove' => 'LacunaPHP\APIClient\Command\Building\Grove\GroveCommandFactory',
			'hallsofvrbansk' => 'LacunaPHP\APIClient\Command\Building\HallsOfVrbansk\HallsOfVrbanskCommandFactory',
			'hydrocarbon' => 'LacunaPHP\APIClient\Command\Building\Hydrocarbon\HydrocarbonCommandFactory',
			'intelligence' => 'LacunaPHP\APIClient\Command\Building\Intelligence\IntelligenceCommandFactory',
			'inteltraining' => 'LacunaPHP\APIClient\Command\Building\IntelTraining\IntelTrainingCommandFactory',
			'interdimensionalrift' => 'LacunaPHP\APIClient\Command\Building\InterDimensionalRift\InterDimensionalRiftCommandFactory',
			'junkhengesculpture' => 'LacunaPHP\APIClient\Command\Building\JunkHengeSculpture\JunkHengeSculptureCommandFactory',
			'kalavianruins' => 'LacunaPHP\APIClient\Command\Building\KalavianRuins\KalavianRuinsCommandFactory',
			'kasternskeep' => 'LacunaPHP\APIClient\Command\Building\KasternsKeep\KasternsKeepCommandFactory',
			'lake' => 'LacunaPHP\APIClient\Command\Building\Lake\LakeCommandFactory',
			'lagoon' => 'LacunaPHP\APIClient\Command\Building\Lagoon\LagoonCommandFactory',
			'lapis' => 'LacunaPHP\APIClient\Command\Building\Lapis\LapisCommandFactory',
			'lapisforest' => 'LacunaPHP\APIClient\Command\Building\LapisForest\LapisForestCommandFactory',
			'libraryofjith' => 'LacunaPHP\APIClient\Command\Building\LibraryOfJith\LibraryOfJithCommandFactory',
			'lostcityoftyleon' => 'LacunaPHP\APIClient\Command\Building\LostCityOfTyleon\LostCityOfTyleonCommandFactory',
			'luxuryhousing' => 'LacunaPHP\APIClient\Command\Building\LuxuryHousing\LuxuryHousingCommandFactory',
			'malcud' => 'LacunaPHP\APIClient\Command\Building\Malcud\MalcudCommandFactory',
			'malcudfield' => 'LacunaPHP\APIClient\Command\Building\MalcudField\MalcudFieldCommandFactory',
			'massadshenge' => 'LacunaPHP\APIClient\Command\Building\MassadsHenge\MassadsHengeCommandFactory',
			'mayhemtraining' => 'LacunaPHP\APIClient\Command\Building\MayhemTraining\MayhemTrainingCommandFactory',
			'mercenariesguild' => 'LacunaPHP\APIClient\Command\Building\MercenariesGuild\MercenariesGuildCommandFactory',
			'metaljunkarches' => 'LacunaPHP\APIClient\Command\Building\MetalJunkArches\MetalJunkArchesCommandFactory',
			'mine' => 'LacunaPHP\APIClient\Command\Building\Mine\MineCommandFactory',
			'miningministry' => 'LacunaPHP\APIClient\Command\Building\MiningMinistry\MiningMinistryCommandFactory',
			'missioncommand' => 'LacunaPHP\APIClient\Command\Building\MissionCommand\MissionCommandCommandFactory',
			'munitionslab' => 'LacunaPHP\APIClient\Command\Building\MunitionsLab\MunitionsLabCommandFactory',
			'naturalspring' => 'LacunaPHP\APIClient\Command\Building\NaturalSpring\NaturalSpringCommandFactory',
			'network19' => 'LacunaPHP\APIClient\Command\Building\Network19\Network19CommandFactory',
			'observatory' => 'LacunaPHP\APIClient\Command\Building\Observatory\ObservatoryCommandFactory',
			'oracleofanid' => 'LacunaPHP\APIClient\Command\Building\OracleOfAnid\OracleOfAnidCommandFactory',
			'orerefinery' => 'LacunaPHP\APIClient\Command\Building\OreRefinery\OreRefineryCommandFactory',
			'orestorage' => 'LacunaPHP\APIClient\Command\Building\OreStorage\OreStorageCommandFactory',
			'oversight' => 'LacunaPHP\APIClient\Command\Building\Oversight\OversightCommandFactory',
			'pancake' => 'LacunaPHP\APIClient\Command\Building\Pancake\PancakeCommandFactory',
			'pantheonofhagness' => 'LacunaPHP\APIClient\Command\Building\PantheonOfHagness\PantheonOfHagnessCommandFactory',
			'park' => 'LacunaPHP\APIClient\Command\Building\Park\ParkCommandFactory',
			'pie' => 'LacunaPHP\APIClient\Command\Building\Pie\PieCommandFactory',
			'pilottraining' => 'LacunaPHP\APIClient\Command\Building\PilotTraining\PilotTrainingCommandFactory',
			'planetarycommand' => 'LacunaPHP\APIClient\Command\Building\PlanetaryCommand\PlanetaryCommandCommandFactory',
			'politicstraining' => 'LacunaPHP\APIClient\Command\Building\PoliticsTraining\PoliticsTrainingCommandFactory',
			'potato' => 'LacunaPHP\APIClient\Command\Building\Potato\PotatoCommandFactory',
			'propulsion' => 'LacunaPHP\APIClient\Command\Building\Propulsion\PropulsionCommandFactory',
			'pyramidjunksculpture' => 'LacunaPHP\APIClient\Command\Building\PyramidJunkSculpture\PyramidJunkSculptureCommandFactory',
			'ravine' => 'LacunaPHP\APIClient\Command\Building\Ravine\RavineCommandFactory',
			'rockyoutcrop' => 'LacunaPHP\APIClient\Command\Building\RockyOutcrop\RockyOutcropCommandFactory',
			'sand' => 'LacunaPHP\APIClient\Command\Building\Sand\SandCommandFactory',
			'saw' => 'LacunaPHP\APIClient\Command\Building\SAW\SAWCommandFactory',
			'security' => 'LacunaPHP\APIClient\Command\Building\Security\SecurityCommandFactory',
			'shake' => 'LacunaPHP\APIClient\Command\Building\Shake\ShakeCommandFactory',
			'shipyard' => 'LacunaPHP\APIClient\Command\Building\Shipyard\ShipyardCommandFactory',
			'singularity' => 'LacunaPHP\APIClient\Command\Building\Singularity\SingularityCommandFactory',
			'soup' => 'LacunaPHP\APIClient\Command\Building\Soup\SoupCommandFactory',
			'spacejunkpark' => 'LacunaPHP\APIClient\Command\Building\SpaceJunkPark\SpaceJunkParkCommandFactory',
			'spaceport' => 'LacunaPHP\APIClient\Command\Building\SpacePort\SpacePortCommandFactory',
			'spacestationlab' => 'LacunaPHP\APIClient\Command\Building\SpaceStationLab\SpaceStationLabCommandFactory',
			'stockpile' => 'LacunaPHP\APIClient\Command\Building\Stockpile\StockpileCommandFactory',
			'subspacesupplydepot' => 'LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\SubspaceSupplyDepotCommandFactory',
			'supplypod' => 'LacunaPHP\APIClient\Command\Building\SupplyPod\SupplyPodCommandFactory',
			'syrup' => 'LacunaPHP\APIClient\Command\Building\Syrup\SyrupCommandFactory',
			'templeofthedrajilites' => 'LacunaPHP\APIClient\Command\Building\TempleOfTheDrajilites\TempleOfTheDrajilitesCommandFactory',
			'terraforminglab' => 'LacunaPHP\APIClient\Command\Building\TerraformingLab\TerraformingLabCommandFactory',
			'terraformingplatform' => 'LacunaPHP\APIClient\Command\Building\TerraformingPlatform\TerraformingPlatformCommandFactory',
			'thedillonforge' => 'LacunaPHP\APIClient\Command\Building\TheDillonForge\TheDillonForgeCommandFactory',
			'thefttraining' => 'LacunaPHP\APIClient\Command\Building\TheftTraining\TheftTrainingCommandFactory',
			'themepark' => 'LacunaPHP\APIClient\Command\Building\ThemePark\ThemeParkCommandFactory',
			'trade' => 'LacunaPHP\APIClient\Command\Building\Trade\TradeCommandFactory',
			'transporter' => 'LacunaPHP\APIClient\Command\Building\Transporter\TransporterCommandFactory',
			'university' => 'LacunaPHP\APIClient\Command\Building\University\UniversityCommandFactory',
			'volcano' => 'LacunaPHP\APIClient\Command\Building\Volcano\VolcanoCommandFactory',
			'wastedigester' => 'LacunaPHP\APIClient\Command\Building\WasteDigester\WasteDigesterCommandFactory',
			'wasteenergy' => 'LacunaPHP\APIClient\Command\Building\WasteEnergy\WasteEnergyCommandFactory',
			'wasteexchanger' => 'LacunaPHP\APIClient\Command\Building\WasteExchanger\WasteExchangerCommandFactory',
			'wasterecycling' => 'LacunaPHP\APIClient\Command\Building\WasteRecycling\WasteRecyclingCommandFactory',
			'wastesequestration' => 'LacunaPHP\APIClient\Command\Building\WasteSequestration\WasteSequestrationCommandFactory',
			'wastetreatment' => 'LacunaPHP\APIClient\Command\Building\WasteTreatment\WasteTreatmentCommandFactory',
			'waterproduction' => 'LacunaPHP\APIClient\Command\Building\WaterProduction\WaterProductionCommandFactory',
			'waterpurification' => 'LacunaPHP\APIClient\Command\Building\WaterPurification\WaterPurificationCommandFactory',
			'waterreclamation' => 'LacunaPHP\APIClient\Command\Building\WaterReclamation\WaterReclamationCommandFactory',
			'waterstorage' => 'LacunaPHP\APIClient\Command\Building\WaterStorage\WaterStorageCommandFactory',
			'wheat' => 'LacunaPHP\APIClient\Command\Building\Wheat\WheatCommandFactory',

			// ss modules
			'artmuseum' => 'LacunaPHP\APIClient\Command\Building\ArtMuseum\ArtMuseumCommandFactory',
			'culinaryinstitute' => 'LacunaPHP\APIClient\Command\Building\CulinaryInstitute\CulinaryInstituteCommandFactory',
			'ibs' => 'LacunaPHP\APIClient\Command\Building\IBS\IBSCommandFactory',
			'operahouse' => 'LacunaPHP\APIClient\Command\Building\OperaHouse\OperaHouseCommandFactory',
			'parliament' => 'LacunaPHP\APIClient\Command\Building\Parliament\ParliamentCommandFactory',
			'policestation' => 'LacunaPHP\APIClient\Command\Building\PoliceStation\PoliceStationCommandFactory',
			'stationcommand' => 'LacunaPHP\APIClient\Command\Building\StationCommand\StationCommandCommandFactory',
			'warehouse' => 'LacunaPHP\APIClient\Command\Building\Warehouse\WarehouseCommandFactory',
		];

		$client = new Client('https://api.example.com');

		foreach($factories as $module => $class) {
			$factory = $client->getFactory($module);

			$this->assertInstanceOf($class, $factory);
		}
	}
	*/

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
