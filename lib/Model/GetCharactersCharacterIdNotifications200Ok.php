<?php
/**
 * GetCharactersCharacterIdNotifications200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * The version of the OpenAPI document: 1.3.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetCharactersCharacterIdNotifications200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdNotifications200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_notifications_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_read' => 'bool',
        'notification_id' => 'int',
        'sender_id' => 'int',
        'sender_type' => 'string',
        'text' => 'string',
        'timestamp' => '\DateTime',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'is_read' => null,
        'notification_id' => 'int64',
        'sender_id' => 'int32',
        'sender_type' => null,
        'text' => null,
        'timestamp' => 'date-time',
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_read' => 'is_read',
        'notification_id' => 'notification_id',
        'sender_id' => 'sender_id',
        'sender_type' => 'sender_type',
        'text' => 'text',
        'timestamp' => 'timestamp',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_read' => 'setIsRead',
        'notification_id' => 'setNotificationId',
        'sender_id' => 'setSenderId',
        'sender_type' => 'setSenderType',
        'text' => 'setText',
        'timestamp' => 'setTimestamp',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_read' => 'getIsRead',
        'notification_id' => 'getNotificationId',
        'sender_id' => 'getSenderId',
        'sender_type' => 'getSenderType',
        'text' => 'getText',
        'timestamp' => 'getTimestamp',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const SENDER_TYPE_CHARACTER = 'character';
    const SENDER_TYPE_CORPORATION = 'corporation';
    const SENDER_TYPE_ALLIANCE = 'alliance';
    const SENDER_TYPE_FACTION = 'faction';
    const SENDER_TYPE_OTHER = 'other';
    const TYPE_ACCEPTED_ALLY = 'AcceptedAlly';
    const TYPE_ACCEPTED_SURRENDER = 'AcceptedSurrender';
    const TYPE_ALL_ANCHORING_MSG = 'AllAnchoringMsg';
    const TYPE_ALL_MAINTENANCE_BILL_MSG = 'AllMaintenanceBillMsg';
    const TYPE_ALL_STRUC_INVULNERABLE_MSG = 'AllStrucInvulnerableMsg';
    const TYPE_ALL_STRUCT_VULNERABLE_MSG = 'AllStructVulnerableMsg';
    const TYPE_ALL_WAR_CORP_JOINED_ALLIANCE_MSG = 'AllWarCorpJoinedAllianceMsg';
    const TYPE_ALL_WAR_DECLARED_MSG = 'AllWarDeclaredMsg';
    const TYPE_ALL_WAR_INVALIDATED_MSG = 'AllWarInvalidatedMsg';
    const TYPE_ALL_WAR_RETRACTED_MSG = 'AllWarRetractedMsg';
    const TYPE_ALL_WAR_SURRENDER_MSG = 'AllWarSurrenderMsg';
    const TYPE_ALLIANCE_CAPITAL_CHANGED = 'AllianceCapitalChanged';
    const TYPE_ALLIANCE_WAR_DECLARED_V2 = 'AllianceWarDeclaredV2';
    const TYPE_ALLY_CONTRACT_CANCELLED = 'AllyContractCancelled';
    const TYPE_ALLY_JOINED_WAR_AGGRESSOR_MSG = 'AllyJoinedWarAggressorMsg';
    const TYPE_ALLY_JOINED_WAR_ALLY_MSG = 'AllyJoinedWarAllyMsg';
    const TYPE_ALLY_JOINED_WAR_DEFENDER_MSG = 'AllyJoinedWarDefenderMsg';
    const TYPE_BATTLE_PUNISH_FRIENDLY_FIRE = 'BattlePunishFriendlyFire';
    const TYPE_BILL_OUT_OF_MONEY_MSG = 'BillOutOfMoneyMsg';
    const TYPE_BILL_PAID_CORP_ALL_MSG = 'BillPaidCorpAllMsg';
    const TYPE_BOUNTY_CLAIM_MSG = 'BountyClaimMsg';
    const TYPE_BOUNTY_ESS_SHARED = 'BountyESSShared';
    const TYPE_BOUNTY_ESS_TAKEN = 'BountyESSTaken';
    const TYPE_BOUNTY_PLACED_ALLIANCE = 'BountyPlacedAlliance';
    const TYPE_BOUNTY_PLACED_CHAR = 'BountyPlacedChar';
    const TYPE_BOUNTY_PLACED_CORP = 'BountyPlacedCorp';
    const TYPE_BOUNTY_YOUR_BOUNTY_CLAIMED = 'BountyYourBountyClaimed';
    const TYPE_BUDDY_CONNECT_CONTACT_ADD = 'BuddyConnectContactAdd';
    const TYPE_CHAR_APP_ACCEPT_MSG = 'CharAppAcceptMsg';
    const TYPE_CHAR_APP_REJECT_MSG = 'CharAppRejectMsg';
    const TYPE_CHAR_APP_WITHDRAW_MSG = 'CharAppWithdrawMsg';
    const TYPE_CHAR_LEFT_CORP_MSG = 'CharLeftCorpMsg';
    const TYPE_CHAR_MEDAL_MSG = 'CharMedalMsg';
    const TYPE_CHAR_TERMINATION_MSG = 'CharTerminationMsg';
    const TYPE_CLONE_ACTIVATION_MSG = 'CloneActivationMsg';
    const TYPE_CLONE_ACTIVATION_MSG2 = 'CloneActivationMsg2';
    const TYPE_CLONE_MOVED_MSG = 'CloneMovedMsg';
    const TYPE_CLONE_REVOKED_MSG1 = 'CloneRevokedMsg1';
    const TYPE_CLONE_REVOKED_MSG2 = 'CloneRevokedMsg2';
    const TYPE_COMBAT_OPERATION_FINISHED = 'CombatOperationFinished';
    const TYPE_CONTACT_ADD = 'ContactAdd';
    const TYPE_CONTACT_EDIT = 'ContactEdit';
    const TYPE_CONTAINER_PASSWORD_MSG = 'ContainerPasswordMsg';
    const TYPE_CORP_ALL_BILL_MSG = 'CorpAllBillMsg';
    const TYPE_CORP_APP_ACCEPT_MSG = 'CorpAppAcceptMsg';
    const TYPE_CORP_APP_INVITED_MSG = 'CorpAppInvitedMsg';
    const TYPE_CORP_APP_NEW_MSG = 'CorpAppNewMsg';
    const TYPE_CORP_APP_REJECT_CUSTOM_MSG = 'CorpAppRejectCustomMsg';
    const TYPE_CORP_APP_REJECT_MSG = 'CorpAppRejectMsg';
    const TYPE_CORP_BECAME_WAR_ELIGIBLE = 'CorpBecameWarEligible';
    const TYPE_CORP_DIVIDEND_MSG = 'CorpDividendMsg';
    const TYPE_CORP_FRIENDLY_FIRE_DISABLE_TIMER_COMPLETED = 'CorpFriendlyFireDisableTimerCompleted';
    const TYPE_CORP_FRIENDLY_FIRE_DISABLE_TIMER_STARTED = 'CorpFriendlyFireDisableTimerStarted';
    const TYPE_CORP_FRIENDLY_FIRE_ENABLE_TIMER_COMPLETED = 'CorpFriendlyFireEnableTimerCompleted';
    const TYPE_CORP_FRIENDLY_FIRE_ENABLE_TIMER_STARTED = 'CorpFriendlyFireEnableTimerStarted';
    const TYPE_CORP_KICKED = 'CorpKicked';
    const TYPE_CORP_LIQUIDATION_MSG = 'CorpLiquidationMsg';
    const TYPE_CORP_NEW_CEO_MSG = 'CorpNewCEOMsg';
    const TYPE_CORP_NEWS_MSG = 'CorpNewsMsg';
    const TYPE_CORP_NO_LONGER_WAR_ELIGIBLE = 'CorpNoLongerWarEligible';
    const TYPE_CORP_OFFICE_EXPIRATION_MSG = 'CorpOfficeExpirationMsg';
    const TYPE_CORP_STRUCT_LOST_MSG = 'CorpStructLostMsg';
    const TYPE_CORP_TAX_CHANGE_MSG = 'CorpTaxChangeMsg';
    const TYPE_CORP_VOTE_CEO_REVOKED_MSG = 'CorpVoteCEORevokedMsg';
    const TYPE_CORP_VOTE_MSG = 'CorpVoteMsg';
    const TYPE_CORP_WAR_DECLARED_MSG = 'CorpWarDeclaredMsg';
    const TYPE_CORP_WAR_DECLARED_V2 = 'CorpWarDeclaredV2';
    const TYPE_CORP_WAR_FIGHTING_LEGAL_MSG = 'CorpWarFightingLegalMsg';
    const TYPE_CORP_WAR_INVALIDATED_MSG = 'CorpWarInvalidatedMsg';
    const TYPE_CORP_WAR_RETRACTED_MSG = 'CorpWarRetractedMsg';
    const TYPE_CORP_WAR_SURRENDER_MSG = 'CorpWarSurrenderMsg';
    const TYPE_CUSTOMS_MSG = 'CustomsMsg';
    const TYPE_DECLARE_WAR = 'DeclareWar';
    const TYPE_DISTRICT_ATTACKED = 'DistrictAttacked';
    const TYPE_DUST_APP_ACCEPTED_MSG = 'DustAppAcceptedMsg';
    const TYPE_ENTOSIS_CAPTURE_STARTED = 'EntosisCaptureStarted';
    const TYPE_FW_ALLIANCE_KICK_MSG = 'FWAllianceKickMsg';
    const TYPE_FW_ALLIANCE_WARNING_MSG = 'FWAllianceWarningMsg';
    const TYPE_FW_CHAR_KICK_MSG = 'FWCharKickMsg';
    const TYPE_FW_CHAR_RANK_GAIN_MSG = 'FWCharRankGainMsg';
    const TYPE_FW_CHAR_RANK_LOSS_MSG = 'FWCharRankLossMsg';
    const TYPE_FW_CHAR_WARNING_MSG = 'FWCharWarningMsg';
    const TYPE_FW_CORP_JOIN_MSG = 'FWCorpJoinMsg';
    const TYPE_FW_CORP_KICK_MSG = 'FWCorpKickMsg';
    const TYPE_FW_CORP_LEAVE_MSG = 'FWCorpLeaveMsg';
    const TYPE_FW_CORP_WARNING_MSG = 'FWCorpWarningMsg';
    const TYPE_FAC_WAR_CORP_JOIN_REQUEST_MSG = 'FacWarCorpJoinRequestMsg';
    const TYPE_FAC_WAR_CORP_JOIN_WITHDRAW_MSG = 'FacWarCorpJoinWithdrawMsg';
    const TYPE_FAC_WAR_CORP_LEAVE_REQUEST_MSG = 'FacWarCorpLeaveRequestMsg';
    const TYPE_FAC_WAR_CORP_LEAVE_WITHDRAW_MSG = 'FacWarCorpLeaveWithdrawMsg';
    const TYPE_FAC_WAR_LP_DISQUALIFIED_EVENT = 'FacWarLPDisqualifiedEvent';
    const TYPE_FAC_WAR_LP_DISQUALIFIED_KILL = 'FacWarLPDisqualifiedKill';
    const TYPE_FAC_WAR_LP_PAYOUT_EVENT = 'FacWarLPPayoutEvent';
    const TYPE_FAC_WAR_LP_PAYOUT_KILL = 'FacWarLPPayoutKill';
    const TYPE_GAME_TIME_ADDED = 'GameTimeAdded';
    const TYPE_GAME_TIME_RECEIVED = 'GameTimeReceived';
    const TYPE_GAME_TIME_SENT = 'GameTimeSent';
    const TYPE_GIFT_RECEIVED = 'GiftReceived';
    const TYPE_I_HUB_DESTROYED_BY_BILL_FAILURE = 'IHubDestroyedByBillFailure';
    const TYPE_INCURSION_COMPLETED_MSG = 'IncursionCompletedMsg';
    const TYPE_INDUSTRY_OPERATION_FINISHED = 'IndustryOperationFinished';
    const TYPE_INDUSTRY_TEAM_AUCTION_LOST = 'IndustryTeamAuctionLost';
    const TYPE_INDUSTRY_TEAM_AUCTION_WON = 'IndustryTeamAuctionWon';
    const TYPE_INFRASTRUCTURE_HUB_BILL_ABOUT_TO_EXPIRE = 'InfrastructureHubBillAboutToExpire';
    const TYPE_INSURANCE_EXPIRATION_MSG = 'InsuranceExpirationMsg';
    const TYPE_INSURANCE_FIRST_SHIP_MSG = 'InsuranceFirstShipMsg';
    const TYPE_INSURANCE_INVALIDATED_MSG = 'InsuranceInvalidatedMsg';
    const TYPE_INSURANCE_ISSUED_MSG = 'InsuranceIssuedMsg';
    const TYPE_INSURANCE_PAYOUT_MSG = 'InsurancePayoutMsg';
    const TYPE_INVASION_SYSTEM_LOGIN = 'InvasionSystemLogin';
    const TYPE_JUMP_CLONE_DELETED_MSG1 = 'JumpCloneDeletedMsg1';
    const TYPE_JUMP_CLONE_DELETED_MSG2 = 'JumpCloneDeletedMsg2';
    const TYPE_KILL_REPORT_FINAL_BLOW = 'KillReportFinalBlow';
    const TYPE_KILL_REPORT_VICTIM = 'KillReportVictim';
    const TYPE_KILL_RIGHT_AVAILABLE = 'KillRightAvailable';
    const TYPE_KILL_RIGHT_AVAILABLE_OPEN = 'KillRightAvailableOpen';
    const TYPE_KILL_RIGHT_EARNED = 'KillRightEarned';
    const TYPE_KILL_RIGHT_UNAVAILABLE = 'KillRightUnavailable';
    const TYPE_KILL_RIGHT_UNAVAILABLE_OPEN = 'KillRightUnavailableOpen';
    const TYPE_KILL_RIGHT_USED = 'KillRightUsed';
    const TYPE_LOCATE_CHAR_MSG = 'LocateCharMsg';
    const TYPE_MADE_WAR_MUTUAL = 'MadeWarMutual';
    const TYPE_MERC_OFFER_RETRACTED_MSG = 'MercOfferRetractedMsg';
    const TYPE_MERC_OFFERED_NEGOTIATION_MSG = 'MercOfferedNegotiationMsg';
    const TYPE_MISSION_OFFER_EXPIRATION_MSG = 'MissionOfferExpirationMsg';
    const TYPE_MISSION_TIMEOUT_MSG = 'MissionTimeoutMsg';
    const TYPE_MOONMINING_AUTOMATIC_FRACTURE = 'MoonminingAutomaticFracture';
    const TYPE_MOONMINING_EXTRACTION_CANCELLED = 'MoonminingExtractionCancelled';
    const TYPE_MOONMINING_EXTRACTION_FINISHED = 'MoonminingExtractionFinished';
    const TYPE_MOONMINING_EXTRACTION_STARTED = 'MoonminingExtractionStarted';
    const TYPE_MOONMINING_LASER_FIRED = 'MoonminingLaserFired';
    const TYPE_MUTUAL_WAR_EXPIRED = 'MutualWarExpired';
    const TYPE_MUTUAL_WAR_INVITE_ACCEPTED = 'MutualWarInviteAccepted';
    const TYPE_MUTUAL_WAR_INVITE_REJECTED = 'MutualWarInviteRejected';
    const TYPE_MUTUAL_WAR_INVITE_SENT = 'MutualWarInviteSent';
    const TYPE_NPC_STANDINGS_GAINED = 'NPCStandingsGained';
    const TYPE_NPC_STANDINGS_LOST = 'NPCStandingsLost';
    const TYPE_OFFER_TO_ALLY_RETRACTED = 'OfferToAllyRetracted';
    const TYPE_OFFERED_SURRENDER = 'OfferedSurrender';
    const TYPE_OFFERED_TO_ALLY = 'OfferedToAlly';
    const TYPE_OLD_LSC_MESSAGES = 'OldLscMessages';
    const TYPE_OPERATION_FINISHED = 'OperationFinished';
    const TYPE_ORBITAL_ATTACKED = 'OrbitalAttacked';
    const TYPE_ORBITAL_REINFORCED = 'OrbitalReinforced';
    const TYPE_OWNERSHIP_TRANSFERRED = 'OwnershipTransferred';
    const TYPE_RAFFLE_CREATED = 'RaffleCreated';
    const TYPE_RAFFLE_EXPIRED = 'RaffleExpired';
    const TYPE_RAFFLE_FINISHED = 'RaffleFinished';
    const TYPE_REIMBURSEMENT_MSG = 'ReimbursementMsg';
    const TYPE_RESEARCH_MISSION_AVAILABLE_MSG = 'ResearchMissionAvailableMsg';
    const TYPE_RETRACTS_WAR = 'RetractsWar';
    const TYPE_SEASONAL_CHALLENGE_COMPLETED = 'SeasonalChallengeCompleted';
    const TYPE_SOV_ALL_CLAIM_AQUIRED_MSG = 'SovAllClaimAquiredMsg';
    const TYPE_SOV_ALL_CLAIM_LOST_MSG = 'SovAllClaimLostMsg';
    const TYPE_SOV_COMMAND_NODE_EVENT_STARTED = 'SovCommandNodeEventStarted';
    const TYPE_SOV_CORP_BILL_LATE_MSG = 'SovCorpBillLateMsg';
    const TYPE_SOV_CORP_CLAIM_FAIL_MSG = 'SovCorpClaimFailMsg';
    const TYPE_SOV_DISRUPTOR_MSG = 'SovDisruptorMsg';
    const TYPE_SOV_STATION_ENTERED_FREEPORT = 'SovStationEnteredFreeport';
    const TYPE_SOV_STRUCTURE_DESTROYED = 'SovStructureDestroyed';
    const TYPE_SOV_STRUCTURE_REINFORCED = 'SovStructureReinforced';
    const TYPE_SOV_STRUCTURE_SELF_DESTRUCT_CANCEL = 'SovStructureSelfDestructCancel';
    const TYPE_SOV_STRUCTURE_SELF_DESTRUCT_FINISHED = 'SovStructureSelfDestructFinished';
    const TYPE_SOV_STRUCTURE_SELF_DESTRUCT_REQUESTED = 'SovStructureSelfDestructRequested';
    const TYPE_SOVEREIGNTY_IH_DAMAGE_MSG = 'SovereigntyIHDamageMsg';
    const TYPE_SOVEREIGNTY_SBU_DAMAGE_MSG = 'SovereigntySBUDamageMsg';
    const TYPE_SOVEREIGNTY_TCU_DAMAGE_MSG = 'SovereigntyTCUDamageMsg';
    const TYPE_STATION_AGGRESSION_MSG1 = 'StationAggressionMsg1';
    const TYPE_STATION_AGGRESSION_MSG2 = 'StationAggressionMsg2';
    const TYPE_STATION_CONQUER_MSG = 'StationConquerMsg';
    const TYPE_STATION_SERVICE_DISABLED = 'StationServiceDisabled';
    const TYPE_STATION_SERVICE_ENABLED = 'StationServiceEnabled';
    const TYPE_STATION_STATE_CHANGE_MSG = 'StationStateChangeMsg';
    const TYPE_STORY_LINE_MISSION_AVAILABLE_MSG = 'StoryLineMissionAvailableMsg';
    const TYPE_STRUCTURE_ANCHORING = 'StructureAnchoring';
    const TYPE_STRUCTURE_COURIER_CONTRACT_CHANGED = 'StructureCourierContractChanged';
    const TYPE_STRUCTURE_DESTROYED = 'StructureDestroyed';
    const TYPE_STRUCTURE_FUEL_ALERT = 'StructureFuelAlert';
    const TYPE_STRUCTURE_ITEMS_DELIVERED = 'StructureItemsDelivered';
    const TYPE_STRUCTURE_ITEMS_MOVED_TO_SAFETY = 'StructureItemsMovedToSafety';
    const TYPE_STRUCTURE_LOST_ARMOR = 'StructureLostArmor';
    const TYPE_STRUCTURE_LOST_SHIELDS = 'StructureLostShields';
    const TYPE_STRUCTURE_ONLINE = 'StructureOnline';
    const TYPE_STRUCTURE_SERVICES_OFFLINE = 'StructureServicesOffline';
    const TYPE_STRUCTURE_UNANCHORING = 'StructureUnanchoring';
    const TYPE_STRUCTURE_UNDER_ATTACK = 'StructureUnderAttack';
    const TYPE_STRUCTURE_WENT_HIGH_POWER = 'StructureWentHighPower';
    const TYPE_STRUCTURE_WENT_LOW_POWER = 'StructureWentLowPower';
    const TYPE_STRUCTURES_JOBS_CANCELLED = 'StructuresJobsCancelled';
    const TYPE_STRUCTURES_JOBS_PAUSED = 'StructuresJobsPaused';
    const TYPE_STRUCTURES_REINFORCEMENT_CHANGED = 'StructuresReinforcementChanged';
    const TYPE_TOWER_ALERT_MSG = 'TowerAlertMsg';
    const TYPE_TOWER_RESOURCE_ALERT_MSG = 'TowerResourceAlertMsg';
    const TYPE_TRANSACTION_REVERSAL_MSG = 'TransactionReversalMsg';
    const TYPE_TUTORIAL_MSG = 'TutorialMsg';
    const TYPE_WAR_ADOPTED = 'WarAdopted';
    const TYPE_WAR_ADOPTED2 = 'WarAdopted ';
    const TYPE_WAR_ALLY_INHERITED = 'WarAllyInherited';
    const TYPE_WAR_ALLY_OFFER_DECLINED_MSG = 'WarAllyOfferDeclinedMsg';
    const TYPE_WAR_CONCORD_INVALIDATES = 'WarConcordInvalidates';
    const TYPE_WAR_DECLARED = 'WarDeclared';
    const TYPE_WAR_HQ_REMOVED_FROM_SPACE = 'WarHQRemovedFromSpace';
    const TYPE_WAR_INHERITED = 'WarInherited';
    const TYPE_WAR_INVALID = 'WarInvalid';
    const TYPE_WAR_RETRACTED = 'WarRetracted';
    const TYPE_WAR_RETRACTED_BY_CONCORD = 'WarRetractedByConcord';
    const TYPE_WAR_SURRENDER_DECLINED_MSG = 'WarSurrenderDeclinedMsg';
    const TYPE_WAR_SURRENDER_OFFER_MSG = 'WarSurrenderOfferMsg';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSenderTypeAllowableValues()
    {
        return [
            self::SENDER_TYPE_CHARACTER,
            self::SENDER_TYPE_CORPORATION,
            self::SENDER_TYPE_ALLIANCE,
            self::SENDER_TYPE_FACTION,
            self::SENDER_TYPE_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACCEPTED_ALLY,
            self::TYPE_ACCEPTED_SURRENDER,
            self::TYPE_ALL_ANCHORING_MSG,
            self::TYPE_ALL_MAINTENANCE_BILL_MSG,
            self::TYPE_ALL_STRUC_INVULNERABLE_MSG,
            self::TYPE_ALL_STRUCT_VULNERABLE_MSG,
            self::TYPE_ALL_WAR_CORP_JOINED_ALLIANCE_MSG,
            self::TYPE_ALL_WAR_DECLARED_MSG,
            self::TYPE_ALL_WAR_INVALIDATED_MSG,
            self::TYPE_ALL_WAR_RETRACTED_MSG,
            self::TYPE_ALL_WAR_SURRENDER_MSG,
            self::TYPE_ALLIANCE_CAPITAL_CHANGED,
            self::TYPE_ALLIANCE_WAR_DECLARED_V2,
            self::TYPE_ALLY_CONTRACT_CANCELLED,
            self::TYPE_ALLY_JOINED_WAR_AGGRESSOR_MSG,
            self::TYPE_ALLY_JOINED_WAR_ALLY_MSG,
            self::TYPE_ALLY_JOINED_WAR_DEFENDER_MSG,
            self::TYPE_BATTLE_PUNISH_FRIENDLY_FIRE,
            self::TYPE_BILL_OUT_OF_MONEY_MSG,
            self::TYPE_BILL_PAID_CORP_ALL_MSG,
            self::TYPE_BOUNTY_CLAIM_MSG,
            self::TYPE_BOUNTY_ESS_SHARED,
            self::TYPE_BOUNTY_ESS_TAKEN,
            self::TYPE_BOUNTY_PLACED_ALLIANCE,
            self::TYPE_BOUNTY_PLACED_CHAR,
            self::TYPE_BOUNTY_PLACED_CORP,
            self::TYPE_BOUNTY_YOUR_BOUNTY_CLAIMED,
            self::TYPE_BUDDY_CONNECT_CONTACT_ADD,
            self::TYPE_CHAR_APP_ACCEPT_MSG,
            self::TYPE_CHAR_APP_REJECT_MSG,
            self::TYPE_CHAR_APP_WITHDRAW_MSG,
            self::TYPE_CHAR_LEFT_CORP_MSG,
            self::TYPE_CHAR_MEDAL_MSG,
            self::TYPE_CHAR_TERMINATION_MSG,
            self::TYPE_CLONE_ACTIVATION_MSG,
            self::TYPE_CLONE_ACTIVATION_MSG2,
            self::TYPE_CLONE_MOVED_MSG,
            self::TYPE_CLONE_REVOKED_MSG1,
            self::TYPE_CLONE_REVOKED_MSG2,
            self::TYPE_COMBAT_OPERATION_FINISHED,
            self::TYPE_CONTACT_ADD,
            self::TYPE_CONTACT_EDIT,
            self::TYPE_CONTAINER_PASSWORD_MSG,
            self::TYPE_CORP_ALL_BILL_MSG,
            self::TYPE_CORP_APP_ACCEPT_MSG,
            self::TYPE_CORP_APP_INVITED_MSG,
            self::TYPE_CORP_APP_NEW_MSG,
            self::TYPE_CORP_APP_REJECT_CUSTOM_MSG,
            self::TYPE_CORP_APP_REJECT_MSG,
            self::TYPE_CORP_BECAME_WAR_ELIGIBLE,
            self::TYPE_CORP_DIVIDEND_MSG,
            self::TYPE_CORP_FRIENDLY_FIRE_DISABLE_TIMER_COMPLETED,
            self::TYPE_CORP_FRIENDLY_FIRE_DISABLE_TIMER_STARTED,
            self::TYPE_CORP_FRIENDLY_FIRE_ENABLE_TIMER_COMPLETED,
            self::TYPE_CORP_FRIENDLY_FIRE_ENABLE_TIMER_STARTED,
            self::TYPE_CORP_KICKED,
            self::TYPE_CORP_LIQUIDATION_MSG,
            self::TYPE_CORP_NEW_CEO_MSG,
            self::TYPE_CORP_NEWS_MSG,
            self::TYPE_CORP_NO_LONGER_WAR_ELIGIBLE,
            self::TYPE_CORP_OFFICE_EXPIRATION_MSG,
            self::TYPE_CORP_STRUCT_LOST_MSG,
            self::TYPE_CORP_TAX_CHANGE_MSG,
            self::TYPE_CORP_VOTE_CEO_REVOKED_MSG,
            self::TYPE_CORP_VOTE_MSG,
            self::TYPE_CORP_WAR_DECLARED_MSG,
            self::TYPE_CORP_WAR_DECLARED_V2,
            self::TYPE_CORP_WAR_FIGHTING_LEGAL_MSG,
            self::TYPE_CORP_WAR_INVALIDATED_MSG,
            self::TYPE_CORP_WAR_RETRACTED_MSG,
            self::TYPE_CORP_WAR_SURRENDER_MSG,
            self::TYPE_CUSTOMS_MSG,
            self::TYPE_DECLARE_WAR,
            self::TYPE_DISTRICT_ATTACKED,
            self::TYPE_DUST_APP_ACCEPTED_MSG,
            self::TYPE_ENTOSIS_CAPTURE_STARTED,
            self::TYPE_FW_ALLIANCE_KICK_MSG,
            self::TYPE_FW_ALLIANCE_WARNING_MSG,
            self::TYPE_FW_CHAR_KICK_MSG,
            self::TYPE_FW_CHAR_RANK_GAIN_MSG,
            self::TYPE_FW_CHAR_RANK_LOSS_MSG,
            self::TYPE_FW_CHAR_WARNING_MSG,
            self::TYPE_FW_CORP_JOIN_MSG,
            self::TYPE_FW_CORP_KICK_MSG,
            self::TYPE_FW_CORP_LEAVE_MSG,
            self::TYPE_FW_CORP_WARNING_MSG,
            self::TYPE_FAC_WAR_CORP_JOIN_REQUEST_MSG,
            self::TYPE_FAC_WAR_CORP_JOIN_WITHDRAW_MSG,
            self::TYPE_FAC_WAR_CORP_LEAVE_REQUEST_MSG,
            self::TYPE_FAC_WAR_CORP_LEAVE_WITHDRAW_MSG,
            self::TYPE_FAC_WAR_LP_DISQUALIFIED_EVENT,
            self::TYPE_FAC_WAR_LP_DISQUALIFIED_KILL,
            self::TYPE_FAC_WAR_LP_PAYOUT_EVENT,
            self::TYPE_FAC_WAR_LP_PAYOUT_KILL,
            self::TYPE_GAME_TIME_ADDED,
            self::TYPE_GAME_TIME_RECEIVED,
            self::TYPE_GAME_TIME_SENT,
            self::TYPE_GIFT_RECEIVED,
            self::TYPE_I_HUB_DESTROYED_BY_BILL_FAILURE,
            self::TYPE_INCURSION_COMPLETED_MSG,
            self::TYPE_INDUSTRY_OPERATION_FINISHED,
            self::TYPE_INDUSTRY_TEAM_AUCTION_LOST,
            self::TYPE_INDUSTRY_TEAM_AUCTION_WON,
            self::TYPE_INFRASTRUCTURE_HUB_BILL_ABOUT_TO_EXPIRE,
            self::TYPE_INSURANCE_EXPIRATION_MSG,
            self::TYPE_INSURANCE_FIRST_SHIP_MSG,
            self::TYPE_INSURANCE_INVALIDATED_MSG,
            self::TYPE_INSURANCE_ISSUED_MSG,
            self::TYPE_INSURANCE_PAYOUT_MSG,
            self::TYPE_INVASION_SYSTEM_LOGIN,
            self::TYPE_JUMP_CLONE_DELETED_MSG1,
            self::TYPE_JUMP_CLONE_DELETED_MSG2,
            self::TYPE_KILL_REPORT_FINAL_BLOW,
            self::TYPE_KILL_REPORT_VICTIM,
            self::TYPE_KILL_RIGHT_AVAILABLE,
            self::TYPE_KILL_RIGHT_AVAILABLE_OPEN,
            self::TYPE_KILL_RIGHT_EARNED,
            self::TYPE_KILL_RIGHT_UNAVAILABLE,
            self::TYPE_KILL_RIGHT_UNAVAILABLE_OPEN,
            self::TYPE_KILL_RIGHT_USED,
            self::TYPE_LOCATE_CHAR_MSG,
            self::TYPE_MADE_WAR_MUTUAL,
            self::TYPE_MERC_OFFER_RETRACTED_MSG,
            self::TYPE_MERC_OFFERED_NEGOTIATION_MSG,
            self::TYPE_MISSION_OFFER_EXPIRATION_MSG,
            self::TYPE_MISSION_TIMEOUT_MSG,
            self::TYPE_MOONMINING_AUTOMATIC_FRACTURE,
            self::TYPE_MOONMINING_EXTRACTION_CANCELLED,
            self::TYPE_MOONMINING_EXTRACTION_FINISHED,
            self::TYPE_MOONMINING_EXTRACTION_STARTED,
            self::TYPE_MOONMINING_LASER_FIRED,
            self::TYPE_MUTUAL_WAR_EXPIRED,
            self::TYPE_MUTUAL_WAR_INVITE_ACCEPTED,
            self::TYPE_MUTUAL_WAR_INVITE_REJECTED,
            self::TYPE_MUTUAL_WAR_INVITE_SENT,
            self::TYPE_NPC_STANDINGS_GAINED,
            self::TYPE_NPC_STANDINGS_LOST,
            self::TYPE_OFFER_TO_ALLY_RETRACTED,
            self::TYPE_OFFERED_SURRENDER,
            self::TYPE_OFFERED_TO_ALLY,
            self::TYPE_OLD_LSC_MESSAGES,
            self::TYPE_OPERATION_FINISHED,
            self::TYPE_ORBITAL_ATTACKED,
            self::TYPE_ORBITAL_REINFORCED,
            self::TYPE_OWNERSHIP_TRANSFERRED,
            self::TYPE_RAFFLE_CREATED,
            self::TYPE_RAFFLE_EXPIRED,
            self::TYPE_RAFFLE_FINISHED,
            self::TYPE_REIMBURSEMENT_MSG,
            self::TYPE_RESEARCH_MISSION_AVAILABLE_MSG,
            self::TYPE_RETRACTS_WAR,
            self::TYPE_SEASONAL_CHALLENGE_COMPLETED,
            self::TYPE_SOV_ALL_CLAIM_AQUIRED_MSG,
            self::TYPE_SOV_ALL_CLAIM_LOST_MSG,
            self::TYPE_SOV_COMMAND_NODE_EVENT_STARTED,
            self::TYPE_SOV_CORP_BILL_LATE_MSG,
            self::TYPE_SOV_CORP_CLAIM_FAIL_MSG,
            self::TYPE_SOV_DISRUPTOR_MSG,
            self::TYPE_SOV_STATION_ENTERED_FREEPORT,
            self::TYPE_SOV_STRUCTURE_DESTROYED,
            self::TYPE_SOV_STRUCTURE_REINFORCED,
            self::TYPE_SOV_STRUCTURE_SELF_DESTRUCT_CANCEL,
            self::TYPE_SOV_STRUCTURE_SELF_DESTRUCT_FINISHED,
            self::TYPE_SOV_STRUCTURE_SELF_DESTRUCT_REQUESTED,
            self::TYPE_SOVEREIGNTY_IH_DAMAGE_MSG,
            self::TYPE_SOVEREIGNTY_SBU_DAMAGE_MSG,
            self::TYPE_SOVEREIGNTY_TCU_DAMAGE_MSG,
            self::TYPE_STATION_AGGRESSION_MSG1,
            self::TYPE_STATION_AGGRESSION_MSG2,
            self::TYPE_STATION_CONQUER_MSG,
            self::TYPE_STATION_SERVICE_DISABLED,
            self::TYPE_STATION_SERVICE_ENABLED,
            self::TYPE_STATION_STATE_CHANGE_MSG,
            self::TYPE_STORY_LINE_MISSION_AVAILABLE_MSG,
            self::TYPE_STRUCTURE_ANCHORING,
            self::TYPE_STRUCTURE_COURIER_CONTRACT_CHANGED,
            self::TYPE_STRUCTURE_DESTROYED,
            self::TYPE_STRUCTURE_FUEL_ALERT,
            self::TYPE_STRUCTURE_ITEMS_DELIVERED,
            self::TYPE_STRUCTURE_ITEMS_MOVED_TO_SAFETY,
            self::TYPE_STRUCTURE_LOST_ARMOR,
            self::TYPE_STRUCTURE_LOST_SHIELDS,
            self::TYPE_STRUCTURE_ONLINE,
            self::TYPE_STRUCTURE_SERVICES_OFFLINE,
            self::TYPE_STRUCTURE_UNANCHORING,
            self::TYPE_STRUCTURE_UNDER_ATTACK,
            self::TYPE_STRUCTURE_WENT_HIGH_POWER,
            self::TYPE_STRUCTURE_WENT_LOW_POWER,
            self::TYPE_STRUCTURES_JOBS_CANCELLED,
            self::TYPE_STRUCTURES_JOBS_PAUSED,
            self::TYPE_STRUCTURES_REINFORCEMENT_CHANGED,
            self::TYPE_TOWER_ALERT_MSG,
            self::TYPE_TOWER_RESOURCE_ALERT_MSG,
            self::TYPE_TRANSACTION_REVERSAL_MSG,
            self::TYPE_TUTORIAL_MSG,
            self::TYPE_WAR_ADOPTED,
            self::TYPE_WAR_ADOPTED2,
            self::TYPE_WAR_ALLY_INHERITED,
            self::TYPE_WAR_ALLY_OFFER_DECLINED_MSG,
            self::TYPE_WAR_CONCORD_INVALIDATES,
            self::TYPE_WAR_DECLARED,
            self::TYPE_WAR_HQ_REMOVED_FROM_SPACE,
            self::TYPE_WAR_INHERITED,
            self::TYPE_WAR_INVALID,
            self::TYPE_WAR_RETRACTED,
            self::TYPE_WAR_RETRACTED_BY_CONCORD,
            self::TYPE_WAR_SURRENDER_DECLINED_MSG,
            self::TYPE_WAR_SURRENDER_OFFER_MSG,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_read'] = isset($data['is_read']) ? $data['is_read'] : null;
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['sender_id'] = isset($data['sender_id']) ? $data['sender_id'] : null;
        $this->container['sender_type'] = isset($data['sender_type']) ? $data['sender_type'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['notification_id'] === null) {
            $invalidProperties[] = "'notification_id' can't be null";
        }
        if ($this->container['sender_id'] === null) {
            $invalidProperties[] = "'sender_id' can't be null";
        }
        if ($this->container['sender_type'] === null) {
            $invalidProperties[] = "'sender_type' can't be null";
        }
        $allowedValues = $this->getSenderTypeAllowableValues();
        if (!is_null($this->container['sender_type']) && !in_array($this->container['sender_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sender_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        /*
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        */

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_read
     *
     * @return bool|null
     */
    public function getIsRead()
    {
        return $this->container['is_read'];
    }

    /**
     * Sets is_read
     *
     * @param bool|null $is_read is_read boolean
     *
     * @return $this
     */
    public function setIsRead($is_read)
    {
        $this->container['is_read'] = $is_read;

        return $this;
    }

    /**
     * Gets notification_id
     *
     * @return int
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     *
     * @param int $notification_id notification_id integer
     *
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets sender_id
     *
     * @return int
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param int $sender_id sender_id integer
     *
     * @return $this
     */
    public function setSenderId($sender_id)
    {
        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets sender_type
     *
     * @return string
     */
    public function getSenderType()
    {
        return $this->container['sender_type'];
    }

    /**
     * Sets sender_type
     *
     * @param string $sender_type sender_type string
     *
     * @return $this
     */
    public function setSenderType($sender_type)
    {
        $allowedValues = $this->getSenderTypeAllowableValues();
        if (!in_array($sender_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sender_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sender_type'] = $sender_type;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text string
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp string
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type string
     *
     * @return $this
     */
    public function setType($type)
    {
        /*
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        */
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


