<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignItemConGroups_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class OmGetCampaignItemConGroupsAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4140a3d6473746f72652f656e67696e652f70726f636564757265732f" .
            "6f6d5f47657443616d706169676e4974656d436f6e47726f7570735f4164" .
            "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
            "6d706169676e4974656d436f6e47726f7570735f41641a136473746f7265" .
            "2f76616c7565732e70726f746f1a1a6473746f72652f656e67696e652f65" .
            "6e67696e652e70726f746f22c0010a0a506172616d657465727312310a0c" .
            "636f6e646974696f6e5f696418012001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c7565121a0a11636f6e646974696f6e" .
            "5f69645f6e756c6c18e90720012808123c0a176974656d5f636f6e646974" .
            "696f6e5f67726f75705f696418022001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c756512250a1c6974656d5f636f6e64" .
            "6974696f6e5f67726f75705f69645f6e756c6c18ea072001280822a7110a" .
            "08526573706f6e736512380a106d6574615f696e666f726d6174696f6e18" .
            "022003280b321e2e6473746f72652e656e67696e652e4d657461496e666f" .
            "726d6174696f6e12270a076d65737361676518032003280b32162e647374" .
            "6f72652e656e67696e652e4d65737361676512470a03726f771804200328" .
            "0b323a2e6473746f72652e656e67696e652e6f6d5f47657443616d706169" .
            "676e4974656d436f6e47726f7570735f41642e526573706f6e73652e526f" .
            "771aee0f0a03526f77120f0a06726f775f696418904e20012805122f0a0a" .
            "636f6e646974696f6e3118914e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c7565122f0a0a636f6e646974696f6e3218" .
            "924e2001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c7565123a0a147265637572736976655f6576616c756174696f6e1893" .
            "4e2001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c7565123d0a17746f5f62617369635f70726963655f73756d5f706172" .
            "7418944e2001280b321b2e6473746f72652e76616c7565732e446563696d" .
            "616c56616c756512390a14646f6d61696e5f747265655f6e6f64655f6964" .
            "7318954e2001280b321a2e6473746f72652e76616c7565732e537472696e" .
            "6756616c7565123c0a166e6f64655f63686172616374657269737469635f" .
            "696418964e2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c7565123c0a166974656d5f636f6e646974696f6e5f706172" .
            "745f696418974e2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565123f0a1966726f6d5f62617369635f7072696365" .
            "5f73756d5f7061727418984e2001280b321b2e6473746f72652e76616c75" .
            "65732e446563696d616c56616c756512310a0b746f5f7175616e74697479" .
            "18994e2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c756512390a136d61785f6e756d6265725f6f665f6974656d7318" .
            "9a4e2001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c7565123e0a18746f5f6974656d5f62617369635f70726963655f70" .
            "617274189b4e2001280b321b2e6473746f72652e76616c7565732e446563" .
            "696d616c56616c756512440a1f6974656d5f636f6e646974696f6e5f7061" .
            "72745f6465736372697074696f6e189c4e2001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c7565122e0a096c6576656c5f69" .
            "6473189d4e2001280b321a2e6473746f72652e76616c7565732e53747269" .
            "6e6756616c7565123d0a176974656d5f636f6e646974696f6e5f67726f75" .
            "705f6964189e4e2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c756512430a1e657874656e6465645f6974656d5f636f" .
            "6e645f67726f75705f6465736372189f4e2001280b321a2e6473746f7265" .
            "2e76616c7565732e537472696e6756616c756512330a0d66726f6d5f7175" .
            "616e7469747918a04e2001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c7565123b0a1566726f6d5f6974656d5f62617369" .
            "635f707269636518a14e2001280b321b2e6473746f72652e76616c756573" .
            "2e446563696d616c56616c756512380a126974656d5f67726f75705f736f" .
            "72745f6e6f18a24e2001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c7565122e0a096f70657261746f723118a34e200128" .
            "0b321a2e6473746f72652e76616c7565732e537472696e6756616c756512" .
            "2e0a096f70657261746f723218a44e2001280b321a2e6473746f72652e76" .
            "616c7565732e537472696e6756616c756512470a21636f6d62696e655f70" .
            "617274735f776974685f615f6e5f645f6f70657261746f7218a54e200128" .
            "0b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c7565" .
            "123e0a186d696e5f6e756d6265725f6f665f6974656d735f7061727418a6" .
            "4e2001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c756512370a116974656d5f706172745f736f72745f6e6f18a74e2001" .
            "280b321b2e6473746f72652e76616c7565732e496e746567657256616c75" .
            "6512420a1d657874656e6465645f6974656d5f636f6e645f706172745f64" .
            "6573637218a84e2001280b321a2e6473746f72652e76616c7565732e5374" .
            "72696e6756616c7565123e0a186d61785f6e756d6265725f6f665f697465" .
            "6d735f7061727418a94e2001280b321b2e6473746f72652e76616c756573" .
            "2e496e746567657256616c756512400a1a66726f6d5f6974656d5f626173" .
            "69635f70726963655f7061727418aa4e2001280b321b2e6473746f72652e" .
            "76616c7565732e446563696d616c56616c756512390a136d696e5f6e756d" .
            "6265725f6f665f6974656d7318ab4e2001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c7565123a0a1466726f6d5f626173" .
            "69635f70726963655f73756d18ac4e2001280b321b2e6473746f72652e76" .
            "616c7565732e446563696d616c56616c756512380a12746f5f6261736963" .
            "5f70726963655f73756d18ad4e2001280b321b2e6473746f72652e76616c" .
            "7565732e446563696d616c56616c756512320a0c636f6e646974696f6e5f" .
            "696418ae4e2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c756512390a13746f5f6974656d5f62617369635f70726963" .
            "6518af4e2001280b321b2e6473746f72652e76616c7565732e446563696d" .
            "616c56616c756512360a10746f5f7175616e746974795f7061727418b04e" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c756512380a1266726f6d5f7175616e746974795f7061727418b14e2001" .
            "280b321b2e6473746f72652e76616c7565732e496e746567657256616c75" .
            "6512330a0d696e68657269745f646570746818b24e2001280b321b2e6473" .
            "746f72652e76616c7565732e496e746567657256616c7565425f0a1b696f" .
            "2e6473746f72652e656e67696e652e70726f636564757265735a40676f73" .
            "646b2e6473746f72652e64652f656e67696e652f70726f63656475726573" .
            "2f6f6d5f47657443616d706169676e4974656d436f6e47726f7570735f41" .
            "64620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
