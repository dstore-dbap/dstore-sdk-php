<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetPaymentCost_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class OmGetPaymentCostPu
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
            "0ae20d0a336473746f72652f656e67696e652f70726f636564757265732f" .
            "6f6d5f4765745061796d656e74436f73745f50752e70726f746f12226473" .
            "746f72652e656e67696e652e6f6d5f4765745061796d656e74436f73745f" .
            "50751a136473746f72652f76616c7565732e70726f746f1a1a6473746f72" .
            "652f656e67696e652f656e67696e652e70726f746f22d2080a0a50617261" .
            "6d657465727312340a0f7061796d656e745f747970655f69641801200128" .
            "0b321b2e6473746f72652e76616c7565732e496e746567657256616c7565" .
            "121d0a147061796d656e745f747970655f69645f6e756c6c18e907200128" .
            "0812300a0b63757272656e63795f696418022001280b321b2e6473746f72" .
            "652e76616c7565732e496e746567657256616c756512190a106375727265" .
            "6e63795f69645f6e756c6c18ea072001280812370a12746f74616c5f6272" .
            "7574746f5f707269636518032001280b321b2e6473746f72652e76616c75" .
            "65732e446563696d616c56616c756512200a17746f74616c5f6272757474" .
            "6f5f70726963655f6e756c6c18eb072001280812360a11746f74616c5f6e" .
            "6574746f5f707269636518042001280b321b2e6473746f72652e76616c75" .
            "65732e446563696d616c56616c7565121f0a16746f74616c5f6e6574746f" .
            "5f70726963655f6e756c6c18ec072001280812310a0c7061796d656e745f" .
            "636f737418052001280b321b2e6473746f72652e76616c7565732e446563" .
            "696d616c56616c7565121a0a117061796d656e745f636f73745f6e756c6c" .
            "18ed072001280812380a137061796d656e745f636f73745f62727574746f" .
            "18062001280b321b2e6473746f72652e76616c7565732e446563696d616c" .
            "56616c756512210a187061796d656e745f636f73745f62727574746f5f6e" .
            "756c6c18ee072001280812320a0d73656c6563745f726573756c74180720" .
            "01280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c" .
            "7565121b0a1273656c6563745f726573756c745f6e756c6c18ef07200128" .
            "08122b0a046461746518082001280b321d2e6473746f72652e76616c7565" .
            "732e54696d657374616d7056616c756512120a09646174655f6e756c6c18" .
            "f00720012808122d0a09756e697175655f696418092001280b321a2e6473" .
            "746f72652e76616c7565732e537472696e6756616c756512170a0e756e69" .
            "7175655f69645f6e756c6c18f10720012808122e0a09706572736f6e5f69" .
            "64180a2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c756512170a0e706572736f6e5f69645f6e756c6c18f207200128" .
            "0812370a1264656c69766572795f706572736f6e5f6964180b2001280b32" .
            "1b2e6473746f72652e76616c7565732e496e746567657256616c75651220" .
            "0a1764656c69766572795f706572736f6e5f69645f6e756c6c18f3072001" .
            "280812410a1c70726963655f6e6f64655f63686172616374657269737469" .
            "635f6964180c2001280b321b2e6473746f72652e76616c7565732e496e74" .
            "6567657256616c7565122a0a2170726963655f6e6f64655f636861726163" .
            "74657269737469635f69645f6e756c6c18f4072001280812350a10736869" .
            "7070696e675f747970655f6964180d2001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c7565121e0a157368697070696e67" .
            "5f747970655f69645f6e756c6c18f5072001280822a1030a08526573706f" .
            "6e736512380a106d6574615f696e666f726d6174696f6e18022003280b32" .
            "1e2e6473746f72652e656e67696e652e4d657461496e666f726d6174696f" .
            "6e12270a076d65737361676518032003280b32162e6473746f72652e656e" .
            "67696e652e4d657373616765123d0a03726f7718042003280b32302e6473" .
            "746f72652e656e67696e652e6f6d5f4765745061796d656e74436f73745f" .
            "50752e526573706f6e73652e526f7712310a0c7061796d656e745f636f73" .
            "7418652001280b321b2e6473746f72652e76616c7565732e446563696d61" .
            "6c56616c756512380a137061796d656e745f636f73745f62727574746f18" .
            "662001280b321b2e6473746f72652e76616c7565732e446563696d616c56" .
            "616c75651a85010a03526f77120f0a06726f775f696418904e2001280512" .
            "320a0c7061796d656e745f636f737418914e2001280b321b2e6473746f72" .
            "652e76616c7565732e446563696d616c56616c756512390a137061796d65" .
            "6e745f636f73745f62727574746f18924e2001280b321b2e6473746f7265" .
            "2e76616c7565732e446563696d616c56616c756542550a1b696f2e647374" .
            "6f72652e656e67696e652e70726f636564757265735a36676f73646b2e64" .
            "73746f72652e64652f656e67696e652f70726f636564757265732f6f6d5f" .
            "4765745061796d656e74436f73745f5075620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
